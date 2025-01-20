<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addresses;
use App\Models\Clients;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Clients::with('address')->get();
        
        if (empty($customers)) {
            return view('pages.admin.viewShipping', [
                'title' => 'Clients Info',
                
                'customers' => null,
                'message' => 'No customers found.',
            ]);
        }
    
        // dd($customers); 
    
        return view('pages.admin.viewShipping', [
            'title' => 'Clients Info',
    
            'clients' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.createShippingInfo', [
            'title' => 'Create New Info',
            'description' => 'Create New Info'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Process the request and save the data to the database
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:100,email|unique:customers,email',
            'phone' => 'required|string|max:30'
        ]);

        // Process the shipping data
        $shippingData = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zipCode' => 'required|string|max:10',
            'country' => 'required|string'
        ]);

        // dd($validatedData, $shippingData);

        // Save the customer // Create a new instance of your model and fill it with the validated data
        $customer = new Clients();
        $customer->fill($validatedData);
        if (!$customer->save()) {
            return redirect()->route('clients.create')->with('error', 'Failed to store data. Please try again.');
        }

        // // Save the shipping information
        $addresses = Addresses::create([
            'customer_id' => $customer->id,
            'address' => $shippingData['address'],
            'city' => $shippingData['city'],
            'state' => $shippingData['state'],
            'zipCode' => $shippingData['zipCode'],
            'country' => $shippingData['country']
        ]);

        if (!$addresses->save()) {
            return redirect()->route('clients.create')->with('error', 'Failed to store data. Please try again.');
        }
    
        // dd('done');
        return redirect()->route('clients.create')->with('success', 'Data has been successfully stored.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Clients $customer)
    {
        $addresses = Addresses::where('customer_id', $customer->id)->get();

        return view('pages.admin.viewClient', [
            'title' => 'View Client Info',
            'customer' => $customer,
            'addresses' => $addresses,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $customer)
    {
        return view('pages.admin.editShippingInfo', [
            'title' => 'Edit Client Info',
            'customer' => $customer,
            'addresses' => Addresses::where('customer_id', $customer->id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $customer)
    {
        // Process the request and update the data in the database
        $validatedData = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:100', 'unique:customers,email,' . $customer->id],
            'phone' => ['nullable', 'string', 'max:30']
        ]);

        // Update the customer data
        $customer->update($validatedData);

        // Delete the old addresses
        Addresses::where('customer_id', $customer->id)->delete();

        // Process the shipping data
        $shippingData = $request->validate([
            'address' => ['required|string|max:255'],
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zipCode' => 'required|string|max:10',
            'country' => 'required|string'
        ]);

        // Update the shipping information
        Addresses::create([
            'customer_id' => $customer->id,
            'address' => $shippingData['address'],
            'city' => $shippingData['city'],
            'state' => $shippingData['state'],
            'zipCode' => $shippingData['zipCode'],
            'country' => $shippingData['country']
        ]);

        return redirect()->route('clients.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $customer)
    {
        $customer->delete();

        return redirect()->route('clients.index')->with('success', 'Customer deleted successfully.');
    }
} 
