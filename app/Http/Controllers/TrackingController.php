<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addresses;
use App\Models\Clients;
use App\Models\Packages;
use App\Models\Tracking;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class TrackingController extends Controller
{
    const ITEMS_PER_PAGE = 15;

    /**
     * Display paginated tracking records with eager loading
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            $trackings = Tracking::with(['address', 'package'])
                ->orderByDesc('id')
                ->paginate(self::ITEMS_PER_PAGE);

            return view('pages.admin.viewTracking', [
                'trackings' => $trackings,
                'packages' => Packages::withCount('trackings')->paginate(self::ITEMS_PER_PAGE)
            ]);

        } catch (\Exception $e) {
            $this->logError('Tracking index error', $e);
            return redirect()->back()->with('error', 'Failed to load tracking data');
        }
    }

    /**
     * Show form for creating new tracking record
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {

        try {
            return view('pages.admin.createTracking', [
                'trackingInfo' => new Tracking(),
                'addresses' => Addresses::all(),
                'packages' => Packages::all()
            ]);

        } catch (\Exception $e) {
            $this->logError('Tracking create form error', $e);
            return redirect()->back()->with('error', 'Failed to load creation form');
        }
    }

    /**
     * Store new tracking record with transaction safety
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request->all());

        try {
            $validated = $this->validateTrackingRequest($request);
            
            DB::transaction(function () use ($validated) {
                Tracking::create($validated);
            });

            return redirect()->route('trackings.index')
                ->with('success', 'Tracking record created successfully');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();

        } catch (\Exception $e) {
            $this->logError('Tracking store error', $e);
            return redirect()->back()
                ->with('error', 'Failed to create tracking record')
                ->withInput();
        }
    }

    /**
     * Show form for editing existing tracking record
     * 
     * @param  Tracking  $tracking
     * @return \Illuminate\View\View
     */
    public function edit(Tracking $tracking)
    {
        try {
            return view('pages.admin.editTracking', [
                'trackingInfo' => $tracking,
                'addresses' => Addresses::all(),
                'packages' => Packages::all(),
                'formattedShipDate' => optional($tracking->ship_date)->format('Y-m-d'),
                'formattedDeliveryDate' => optional($tracking->delivery_date)->format('Y-m-d')
            ]);

        } catch (\Exception $e) {
            $this->logError('Tracking edit error', $e);
            return redirect()->back()->with('error', 'Failed to load edit form');
        }
    }

    /**
     * Update existing tracking record with transaction safety
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  Tracking  $tracking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tracking $tracking)
    {

        try {
            $validated = $this->validateTrackingRequest($request, $tracking);
            
            DB::transaction(function () use ($tracking, $validated) {
                // dd($tracking, $validated);

                $tracking->update($validated);
            });

            return redirect()->route('trackings.index')
                ->with('success', 'Tracking record updated successfully');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();

        } catch (\Exception $e) {
            $this->logError('Update failed for tracking '.$tracking->id, $e);
            return redirect()->back()
                ->with('error', 'Update failed: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Delete tracking record with dependency checks
     * 
     * @param  Tracking  $tracking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tracking $tracking)
    {
        try {
            DB::transaction(function () use ($tracking) {
                $this->validatePackageDependencies($tracking);
                $tracking->delete();
            });

            return redirect()->route('trackings.index')
                ->with('success', 'Tracking record deleted successfully');

        } catch (\Exception $e) {
            $this->logError('Tracking delete error', $e);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Centralized validation for tracking requests
     */
    private function validateTrackingRequest(Request $request, ?Tracking $tracking = null): array
    {
        $validated = $request->validate([
            'tracking_number' => [
                'required',
                'max:255',
                Rule::unique('tracking')->ignore($tracking->id ?? null)
            ],
            'address_id' => 'required|exists:addresses,id',
            'package_id' => 'required|exists:packages,id',
            'shipping_method' => 'required|in:standard,express,overnight',
            'ship_date' => 'required|date',
            'delivery_date' => 'required|date|after:ship_date',
            'carrier_name' => 'required|max:255',
            'current_location' => 'required|string|max:255',
            'shipping_cost' => 'required|numeric|min:0',
            'package_status' => 'required|in:pending,in_transit,delivered',
            'is_delayed' => 'sometimes|boolean',
            'is_returned' => 'sometimes|boolean',
            'is_insured' => 'sometimes|boolean',
            'notes' => 'nullable|string|max:2000'  // Increased max length for notes
        ]);
        
        // Format dates for database
        $validated['ship_date'] = Carbon::parse($validated['ship_date'])->toDateTimeString();
        $validated['delivery_date'] = Carbon::parse($validated['delivery_date'])->toDateTimeString();

        return $validated;

        // dd($validated);
    }

    /**
     * Validate package dependencies before deletion
     */
    private function validatePackageDependencies(Tracking $tracking): void
    {
        if ($tracking->package()->exists()) {
            throw new \Exception('Cannot delete tracking with associated package');
        }
    }

    /**
     * Format tracking dates for display
     */
    private function formatTrackingDates(Tracking $tracking): array
    {
        return [
            'ship_date' => $tracking->ship_date?->format('Y-m-d'),
            'delivery_date' => $tracking->delivery_date?->format('Y-m-d')
        ];
    }

    /**
     * Centralized error logging
     */
    private function logError(string $message, \Exception $e): void
    {
        Log::error("$message: {$e->getMessage()}", [
            'exception' => $e,
            'trace' => $e->getTraceAsString()
        ]);
    }

    public function show(Tracking $tracking)
    {
        $tracking->load(['address', 'package']);
        
        return response()->json([
            'tracking' => $tracking,
            'address' => $tracking->address,
            'package' => $tracking->package,
            'statusBadge' => view('partials.status-badge', ['status' => $tracking->package_status])->render()
        ]);
    }
}
