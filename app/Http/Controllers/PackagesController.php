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
    public function edit(Packages $packages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packages $packages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packages $packages)
    {
        //
    }
}
