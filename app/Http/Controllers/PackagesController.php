<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.createPackages', [
            'title' => 'Create Package Info',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'weight' => 'required|numeric|min:0',
            'amount' => 'required|numeric|min:0',
        ]);

        try {
            DB::beginTransaction();
            
            $package = Packages::create($validated);
            
            DB::commit();
            
            return redirect()->route('trackings.index')
                ->with('success', 'Package created successfully!');

        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Package creation failed: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Package creation failed. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Packages $packages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packages $package)
    {
        // $id = Packages::find($packages);

        // dd($package);

        return view('pages.admin.editPackages', [
            'title' => 'Edit Package Info',
            'packageInfo' => $package

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        try {
            $package = Packages::findOrFail($id);
            
            DB::beginTransaction();
            $package->update($validated);
            DB::commit();

            return redirect()->route('trackings.index', $package->id)
                ->with('success', 'Package updated successfully!');

        } catch (ModelNotFoundException $e) {
            Log::error('Package not found: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Package not found.');
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Package update failed: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update package. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            $package = Packages::findOrFail($id);
            $trackingCount = $package->trackings()->count();

            if ($trackingCount > 0 && !$request->has('confirm_delete')) {
                return redirect()->back()->with([
                    'warning' => "This package has $trackingCount tracking records. Confirm deletion?",
                    'package_id' => $id
                ]);
            }

            DB::beginTransaction();
            $package->delete();
            DB::commit();

            return redirect()->route('trackings.index')
                ->with('success', 'Package deleted successfully.');

        } catch (ModelNotFoundException $e) {
            Log::error('Package not found during deletion: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Package not found.');
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Package deletion failed: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to delete package. Please try again.');
        }
    }
}
