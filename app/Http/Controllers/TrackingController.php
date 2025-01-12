<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addresses;
use App\Models\Tracking;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.viewTracking', [
            'title' => 'Tracking Info',
    
            // 'clients' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresses = Addresses::all();

        return view('pages.admin.createTracking', [
            'title' => 'Create Tracking Info',
            'description' => 'Create New Info',
            'addresses' => $addresses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Preprocess request data: default unchecked checkboxes to false
    $data = $request->all();
    $data['is_delayed'] = $request->has('is_delayed') ? true : false;
    $data['is_returned'] = $request->has('is_returned') ? true : false;
    $data['is_insured'] = $request->has('is_insured') ? true : false;

    // Validate the request data
    $validated = $request->validate([
        'tracking_number' => 'required|unique:tracking,tracking_number|max:10',
        'shipping_method' => 'nullable|string',
        'shipping_date' => 'nullable|date',
        'package_status' => 'required|string|in:in_transit,delivered,pending',
        'carrier_name' => 'nullable|string',
        'shipping_cost' => 'nullable|numeric',
        'is_delayed' => 'nullable|boolean',
        'is_returned' => 'nullable|boolean',
        'is_insured' => 'nullable|boolean',
        'address_id' => 'required|exists:addresses,id',  // Ensure the address_id exists in the addresses table
    ]);

    // dd($validated);

    try {
        // Attempt to create the tracking record
        dd($validated);
        $tracking = Tracking::create($validated);

        // Redirect with success message if creation is successful
        // return redirect()->route('trackings.index')->with('success', 'Tracking created successfully!');
    } catch (Exception $e) {
        // Log the error message for debugging purposes
        Log::error('Tracking creation failed: ' . $e->getMessage());

        // Return a response with an error message to the user
        return redirect()->back()->with('error', 'There was an issue creating the tracking record. Please try again.');
    }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
