<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Exception;

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
        $data = $request->all();

        $packageValidated = $request->validate([
            'package_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'weight' => 'required|numeric|min:0',
            'amount' => 'required|numeric|min:0',
        ]);

        try {
            $package = Packages::create($packageValidated);

            // Redirect with success message
            Session::flash('success', 'Package created successfully!');
            return redirect()->route('trackings.index');
        } catch (Exception $e) {
            // Log the error message for debugging
            Log::error('Error creating package or tracking: ' . $e->getMessage());

            // Return a response with an error message to the user
            Session::flash('error', 'There was an issue creating the package record. Please try again.');
            return redirect()->back();
        }

        // dd($packageValidated);
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
        // dd([$request->all(), $id]);

        // Validate the input data
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'weight'       => 'required|numeric',
            'amount'       => 'required|numeric',
            'description'  => 'nullable|string',
        ]);

        // Find the package by ID
        $package = Packages::find($id);

        // Check if the package exists
        if (!$package) {
            return redirect()->back()->withErrors(['error' => 'Package not found.']);
        }

        // Update package details
        try {
            $package->update($validated);
            return redirect()->route('trackings.index')->with('success', 'Package updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // Find the package by ID
        $package = Packages::find($id);

        // Check if the package exists
        if (!$package) {
            return redirect()->back()->withErrors(['error' => 'Package not found.']);
        }

        // Check if this package is linked to any trackings
        $trackingCount = $package->trackings()->count();

        // If package has tracking records and user has not confirmed deletion
        if ($trackingCount >= 0 && !$request->has('confirm_delete')) {
            return redirect()->back()->with([
                'warning' => "This package is linked to $trackingCount other records. Are you sure you want to delete it?",
                'package_id' => $id,
                'package_info' => $package
            ]);
        }

        // If user confirmed deletion, proceed
        $package->delete();

        return redirect()->back()->with(['success' => 'Package deleted successfully.']);
    }
}
