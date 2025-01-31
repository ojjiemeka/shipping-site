<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Addresses;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource with eager loading.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $clients = Clients::with('address')
            ->when($search, function($query) use ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('firstName', 'like', "%$search%")
                      ->orWhere('lastName', 'like', "%$search%")
                      ->orWhere('email', 'like', "%$search%")
                      ->orWhere('phone', 'like', "%$search%")
                      ->orWhereHas('address', function($q) use ($search) {
                          $q->where('address', 'like', "%$search%")
                            ->orWhere('city', 'like', "%$search%")
                            ->orWhere('state', 'like', "%$search%")
                            ->orWhere('zipCode', 'like', "%$search%");
                      });
                });
            })
            ->paginate(10);

            // dd($clients);
        return view('pages.admin.viewShipping', [
            'title' => 'Clients Info',
            'clients' => $clients,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.createShippingInfo', [
            'title' => 'Create New Client',
            'description' => 'Enter new client information and address details'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate all data first
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:100|unique:customers,email',
            'phone' => 'required|string|max:30',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zipCode' => 'required|string|max:10',
            'country' => 'required|string'
        ]);

        DB::beginTransaction();
        try {
            // Create client with validated data
            $client = Clients::create($validatedData);
            
            // Create related address using validated data
            $client->address()->create([
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'zipCode' => $validatedData['zipCode'],
                'country' => $validatedData['country']
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Client creation failed: " . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create client. Please try again.');
        }

        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display single client with verification of relationships.
     */
    public function show(Clients $client)
    {
        // Eager load address relationship to prevent N+1 query
        $client->load('address');

        return view('pages.admin.viewClient', [
            'title' => 'View Client Info',
            'client' => $client,  // Changed from 'customer' to 'client' for consistency
            'address' => $client->address,  // Simplified from separate addresses query
        ]);
    }

    /**
     * Edit form with pre-loaded relationship data.
     */
    public function edit(Clients $client)
    {
        // Eager load address data for editing
        $client->load('address');

        return view('pages.admin.editShipping', [
            'title' => 'Edit Client Info',
            'client' => $client,  // Changed from 'clients' to 'client' for singular consistency
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $client)
    {
        // Validate client data
        $validatedClientData = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:100', 'unique:customers,email,' . $client->id],
            'phone' => ['nullable', 'string', 'max:30']
        ]);
        
        // Validate address data
        $validatedAddressData = $request->validate([
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zipCode' => ['required', 'string', 'max:10'],
            'country' => ['required', 'string']
        ]);
        
        DB::beginTransaction();
        try {
            // Update client
            $client->update($validatedClientData);
        
            // Update or create address
            $client->address()->updateOrCreate(
                ['customer_id' => $client->id],
                $validatedAddressData
            );
        
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Client update failed: " . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed. Please try again.');
        }
        
        return redirect()->route('clients.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $client)
    {
        // Verify existence of client and related address
        if (!$client->exists) {
            return redirect()->back()->with('error', 'Client not found');
        }

        // Use transaction to ensure data integrity
        DB::beginTransaction();
        try {
            // Delete related address if exists (using eager loaded relationship)
            if ($client->address) {
                $client->address->delete();
            }

            // Delete primary client record
            $client->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Client deletion failed: " . $e->getMessage());
            return redirect()->back()->with('error', 'Deletion failed. Please try again.');
        }

        return redirect()->route('clients.index')->with('success', 'Customer deleted successfully.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $clients = Clients::with('address')
            ->when($search, function($query) use ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('firstName', 'like', "%$search%")
                      ->orWhere('lastName', 'like', "%$search%")
                      ->orWhere('email', 'like', "%$search%")
                      ->orWhere('phone', 'like', "%$search%")
                      ->orWhereHas('address', function($q) use ($search) {
                          $q->where('address', 'like', "%$search%")
                            ->orWhere('city', 'like', "%$search%")
                            ->orWhere('state', 'like', "%$search%")
                            ->orWhere('zipCode', 'like', "%$search%");
                      });
                });
            })
            ->paginate(10)
            ->appends(['search' => $search]);

        return response()->json([
            'html' => view('partials.client-rows', ['clients' => $clients])->render(),
            'paginationHtml' => view('partials.pagination', ['paginator' => $clients])->render(),
            'resultsInfoHtml' => view('partials.results-info', ['clients' => $clients])->render()
        ]);
    }
}
