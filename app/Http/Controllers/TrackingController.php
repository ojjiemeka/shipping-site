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

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trackings = Tracking::with(['address.clients', 'packages'])->get();
        $packages = Packages::all();
        // $clients = Clients::all();

        // dd($trackings);

        return view('pages.admin.viewTracking', [
            'title' => 'Tracking Info',

            'trackings' => $trackings,
            'packages' => $packages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresses = Addresses::all();
        $packages = Packages::all();
        return view('pages.admin.createTracking', [
            'title' => 'Create Tracking Info',
            'description' => 'Create New Info',
            'addresses' => $addresses,
            'packages' => $packages,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Preprocess request data: default unchecked checkboxes to false
        $data = $request->all();

        // dd($data['package_id']);
        $data['is_delayed'] = $request->has('is_delayed') ? true : false;
        $data['is_returned'] = $request->has('is_returned') ? true : false;
        $data['is_insured'] = $request->has('is_insured') ? true : false;

        // Validate tracking data
        $trackingValidated = $request->validate([
            'tracking_number' => 'required|unique:tracking,tracking_number|max:50',
            'address_id' => 'required|exists:addresses,id', // Ensure the address_id exists in the addresses table
            'shipping_method' => 'nullable|string|in:standard,express,overnight',
            'ship_date' => 'nullable|date',
            'delivery_date' => 'nullable|date|after_or_equal:ship_date',
            // 'delivered_at' => 'nullable|date|after_or_equal:ship_date',
            'package_status' => 'required|string|in:in_transit,delivered,pending',
            'carrier_name' => 'nullable|string|max:255',
            'shipping_cost' => 'nullable|numeric|min:0',
            'current_location' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
            'is_delayed' => 'nullable|boolean',
            'is_returned' => 'nullable|boolean',
            'is_insured' => 'nullable|boolean',
        ]);


        // dd($packageValidated, $trackingValidated);


        try {

            // Check if a package is selected or new package data is provided
            $packageValidated = [];
            if ($request->has('package_id')) {
                // Package selected from the existing packages
                $package = Packages::findOrFail($request->package_id);
                // $packageValidated['package_name'] = $package->package_name;
                // $packageValidated['weight'] = $package->weight;
                // $packageValidated['amount'] = $package->amount;
                // $packageValidated['description'] = $package->description;

                // Store the package and get its ID
                $trackingValidated['package_id'] = $package->id; // Associate package_id with tracking

                // dd($trackingValidated, $package);

            }
            // Store the tracking
            $tracking = Tracking::create($trackingValidated);

            // dd($package, $tracking);
            // Redirect with success message
            Session::flash('success', 'Package and Tracking created successfully!');
            return redirect()->route('trackings.index');
        } catch (Exception $e) {
            // Log the error message for debugging
            Log::error('Error creating package or tracking: ' . $e->getMessage());

            // Return a response with an error message to the user
            Session::flash('error', 'There was an issue creating the package or tracking record. Please try again.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tracking = Tracking::with(['address.clients', 'packages'])->find($id);

        // dd($id, $tracking);

        if ($tracking) {
            return response()->json([
                'id' => $tracking->id,
                'tracking' => [
                    'tracking_number' => $tracking->tracking_number,
                    'package_status' => $tracking->package_status,
                    'shipping_method' => $tracking->shipping_method,
                    'ship_date' => $tracking->ship_date,
                    'delivery_date' => $tracking->delivery_date,
                    'delivery_date' => $tracking->delivery_date,
                    'carrier_name' => $tracking->carrier_name,
                    'shipping_cost' => $tracking->shipping_cost,
                    'is_delayed' => $tracking->is_delayed,
                    'is_returned' => $tracking->is_returned,
                    'is_insured' => $tracking->is_insured,
                ],
                'address' => [
                    'address' => $tracking->address->address,
                    'city' => $tracking->address->city,
                    'state' => $tracking->address->state,
                    'zipCode' => $tracking->address->zipCode,
                    'country' => $tracking->address->country
                ],
                'packages' => [
                    'package_name' => $tracking->packages->package_name,
                    'description' => $tracking->packages->description,
                    'weight' => $tracking->packages->weight,
                    'amount' => $tracking->packages->amount
                ],
            ]);
        } else {
            return response()->json(['error' => 'Tracking not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $trackingInformation = Tracking::with(['address.clients', 'packages'])->find($id);
        $addresses = Addresses::all();
        $packages = Packages::all();

        // Format dates in the controller
        $formattedShipDate = Carbon::parse($trackingInformation->ship_date)->format('Y-m-d');
        $formattedDeliveryDate = Carbon::parse($trackingInformation->delivery_date)->format('Y-m-d');

        //    dd($trackingInformation);

        return view('pages.admin.editTracking', [
            'title' => 'Edit Package Info',
            'trackingInfo' => $trackingInformation,
            'addresses' => $addresses,
            'packages' => $packages,
            'formattedShipDate' => $formattedShipDate,
            'formattedDeliveryDate' => $formattedDeliveryDate
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        // dd([$request->all(), $id]);

        // dd($data['package_id']);
        $data['is_delayed'] = $request->has('is_delayed') ? true : false;
        $data['is_returned'] = $request->has('is_returned') ? true : false;
        $data['is_insured'] = $request->has('is_insured') ? true : false;

        // Validate tracking data
        $trackingValidated = $request->validate([
            'tracking_number' => 'required|exists:tracking,tracking_number',
            'address_id' => 'required|exists:addresses,id', // Ensure the address_id exists in the addresses table
            'package_id' => 'required|exists:packages,id', // Ensure package_id exists in the packages table
            'shipping_method' => 'nullable|string|in:standard,express,overnight',
            'ship_date' => 'nullable|date',
            'delivery_date' => 'nullable|date|after_or_equal:ship_date',
            'package_status' => 'required|string|in:in_transit,delivered,pending',
            'carrier_name' => 'nullable|string|max:255',
            'shipping_cost' => 'nullable|numeric|min:0',
            'current_location' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
            'is_delayed' => 'nullable|boolean',
            'is_returned' => 'nullable|boolean',
            'is_insured' => 'nullable|boolean',
        ]);

        
        $newTracking = Tracking::find($id);

        // Check if the tracking exists
        if (!$newTracking) {
            return redirect()->back()->withErrors(['error' => 'Tracking Details not found.']);
        }

        // Update package details
        try {
            $newTracking->update($trackingValidated);
            return redirect()->route('trackings.index')->with('success', 'Tracking has been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
        
        // dd($trackingValidated,$newTracking);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tracking = Tracking::find($id);

        // dd($tracking, $id);

        // Check if the tracking exists
        if (!$tracking) {
            return redirect()->back()->withErrors(['error' => 'Tracking Details not found.']);
        }

        $tracking->delete();
        return redirect()->back()->with(['success' => 'Tracking deleted successfully.']);


    }
}
