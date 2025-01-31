@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        'title' => 'Create New Tracking',
        'description' => 'Multi-step form for creating shipment tracking'
    ])

    @include('components.adminSidebar')

    <div id="content" class="app-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-xl-9">
                            <h1 class="page-header">
                                Create New Receiver
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <div id="wizardLayout1" class="mb-5">
                                <p class="mb-3">
                                    please fill out all the boxes befor proceeding...
                                </p>
                                <div class="card">
                                    <div class="card-header with-btn">
                                        WIZARD
                                        <div class="card-header-btn">
                                            <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                            <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                            <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                                    icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="nav-wizards-container">
                                            <nav class="nav nav-wizards-1 mb-2">
                                                @foreach(['Enter Package Details', 'Create Tracking Details', 'Review & Confirm'] as $index => $text)
                                                <div class="nav-item col">
                                                    <a class="nav-link" id="step{{ $index+1 }}-tab" href="#">
                                                        <div class="nav-no">{{ $index+1 }}</div>
                                                        <div class="nav-text">{{ $text }}</div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </nav>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('trackings.store') }}" method="POST"
                                                    id="trackingForm">
                                                    @csrf
                                                    <div class="step" id="step1">
                                                        <div class="row">
                                                            <!-- Select Existing Package -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="package_id">Select Existing
                                                                    Package</label>
                                                                <select class="form-select" id="package_id"
                                                                    name="package_id">
                                                                    <option value="">Select Existing Package</option>
                                                                    @foreach ($packages as $package)
                                                                        <option value="{{ $package->id }}"
                                                                            data-display-text="{{ $package->package_name }}"
                                                                            data-price="{{ $package->amount }}"
                                                                            data-weight="{{ $package->weight }}"
                                                                            data-description="{{ $package->description }}">
                                                                            {{ $package->package_name }} - ${{ $package->amount }} (Weight: {{ $package->weight }} kg)
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            {{-- <input type="hidden" id="packageName" name="package_name"> --}}

                                                            <!-- Package Name -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="packageName">Package
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="packageName"
                                                                    name="package_name" readonly required>
                                                            </div>

                                                            <!-- Weight -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="weight">Weight (kg)</label>
                                                                <input type="number" step="0.01" class="form-control"
                                                                    id="weight" name="weight" readonly required>
                                                            </div>

                                                            <!-- Amount -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="amount">Amount</label>
                                                                <input type="number" step="0.01" class="form-control"
                                                                    id="amount" name="amount" readonly required>
                                                            </div>

                                                            <!-- Description -->
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label"
                                                                    for="description">Description</label>
                                                                <textarea class="form-control" readonly id="description" name="description" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="step d-none" id="step2">
                                                        <!-- Tracking Number -->
                                                        <div class="mb-3 d-flex">
                                                            <label for="trackingNumber"
                                                                class="col-sm-2 col-form-label">Tracking Number</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    id="trackingNumber" name="tracking_number"
                                                                    placeholder="Enter or generate tracking number"
                                                                    readonly>
                                                            </div>
                                                            <div class="col-sm-2 mx-15px">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                    id="generateTrackingNumber">Generate</button>
                                                            </div>
                                                        </div>

                                                        <!-- Address Selection -->
                                                        <div class="mb-3 row">
                                                            <label for="address_id"
                                                                class="col-sm-2 col-form-label">Address</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" id="address_id"
                                                                    name="address_id">
                                                                    <option selected>Select Address</option>
                                                                    @foreach ($addresses as $address)
                                                                        <option value="{{ $address->id }}">
                                                                            {{ $address->address }}, {{ $address->city }},
                                                                            {{ $address->country }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Shipping Method -->
                                                        <div class="mb-3 row">
                                                            <label for="shippingMethod"
                                                                class="col-sm-2 col-form-label">Shipping Method</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" id="shippingMethod"
                                                                    name="shipping_method">
                                                                    <option selected>Select Shipping Method</option>
                                                                    <option value="standard">Standard</option>
                                                                    <option value="express">Express</option>
                                                                    <option value="overnight">Overnight</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Shipping Date -->
                                                        <div class="mb-3 row">
                                                            <label for="shippingDate"
                                                                class="col-sm-2 col-form-label">Shipping Date</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="shipDate"
                                                                    name="ship_date">
                                                            </div>
                                                        </div>

                                                        <!-- Estimated Delivery Date -->
                                                        <div class="mb-3 row">
                                                            <label for="deliveryDate"
                                                                class="col-sm-2 col-form-label">Estimated Delivery
                                                                Date</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control"
                                                                    id="deliveryDate" name="delivery_date">
                                                            </div>
                                                        </div>

                                                        <!-- Delivered At -->
                                                        {{-- <div class="mb-3 row">
                                                            <label for="deliveredAt" class="col-sm-2 col-form-label">Delivered At</label>
                                                            <div class="col-sm-10">
                                                                <input type="datetime-local" class="form-control" id="deliveredAt" name="delivered_at">
                                                            </div>
                                                        </div> --}}

                                                        <!-- Carrier Name -->
                                                        <div class="mb-3 row">
                                                            <label for="carrierName"
                                                                class="col-sm-2 col-form-label">Carrier Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="carrierName" name="carrier_name"
                                                                    placeholder="Enter carrier name">
                                                            </div>
                                                        </div>

                                                        <!-- Shipping Cost -->
                                                        <div class="mb-3 row">
                                                            <label for="shippingCost"
                                                                class="col-sm-2 col-form-label">Shipping Cost</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" step="0.01" class="form-control"
                                                                    id="shippingCost" name="shipping_cost"
                                                                    placeholder="Enter shipping cost">
                                                            </div>
                                                        </div>

                                                        <!-- Current Location -->
                                                        <div class="mb-3 row">
                                                            <label for="currentLocation"
                                                                class="col-sm-2 col-form-label">Current Location</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="currentLocation" name="current_location"
                                                                    placeholder="Enter current location">
                                                            </div>
                                                        </div>

                                                        <!-- Notes -->
                                                        <div class="mb-3 row">
                                                            <label for="notes"
                                                                class="col-sm-2 col-form-label">Notes</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" id="notes" name="notes" placeholder="Enter any notes about the package"></textarea>
                                                            </div>
                                                        </div>

                                                        <!-- Status Radios -->
                                                        <fieldset class="mb-3">
                                                            <div class="row">
                                                                <label class="col-form-label col-sm-2 pt-0">Status</label>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_status" id="statusInTransit"
                                                                            value="in_transit" checked>
                                                                        <label class="form-check-label"
                                                                            for="statusInTransit">In Transit</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_status" id="statusDelivered"
                                                                            value="delivered">
                                                                        <label class="form-check-label"
                                                                            for="statusDelivered">Delivered</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_status" id="statusPending"
                                                                            value="pending">
                                                                        <label class="form-check-label"
                                                                            for="statusPending">Pending</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>

                                                        <div class="row">
                                                            <!-- Delayed Checkbox -->
                                                            <div class="mb-3 d-flex justify-content-between">
                                                                <label for="isDelayed" class="col-sm-2 col-form-label">Is
                                                                    Delayed</label>
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" name="is_delayed"
                                                                        value="0">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="isDelayed" name="is_delayed" value="1">
                                                                </div>
                                                            </div>

                                                            <!-- Returned Checkbox -->
                                                            <div class="mb-3 d-flex justify-content-between">
                                                                <label for="isReturned" class="col-sm-2 col-form-label">Is
                                                                    Returned</label>
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" name="is_returned"
                                                                        value="0">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="isReturned" name="is_returned"
                                                                        value="1">
                                                                </div>
                                                            </div>

                                                            <!-- Insured Checkbox -->
                                                            <div class="mb-3 d-flex justify-content-between">
                                                                <label for="isInsured" class="col-sm-2 col-form-label">Is
                                                                    Insured</label>
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" name="is_insured"
                                                                        value="0">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="isInsured" name="is_insured" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="step d-none" id="step3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5 class="mb-3">Review Your Information</h5>
                                                                <div id="reviewContent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-lg btn-outline-theme"
                                                                id="prevBtn" style="display: none;">Back</button>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-lg btn-outline-theme"
                                                                id="nextBtn">Next</button>
                                                            <button type="submit" class="btn btn-lg btn-outline-success"
                                                                id="submitBtn" style="display: none;">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hljs-container">
                                        <pre><code class="xml" data-url="assets/data/form-wizards/code-1.json"></code></pre>
                                    </div>
                                </div>
                            </div>

                            <script>
                                // JavaScript to generate a 10-character alphanumeric tracking number
                                document.getElementById('generateTrackingNumber').addEventListener('click', function() {
                                    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                                    let trackingNumber = '';
                                    for (let i = 0; i < 10; i++) {
                                        trackingNumber += characters.charAt(Math.floor(Math.random() * characters.length));
                                    }
                                    document.getElementById('trackingNumber').value = trackingNumber;
                                });
                            </script>

                            <script>
                                // Passing the $addresses from PHP (Laravel) to JavaScript
                                const addresses = @json($addresses);

                                document.addEventListener('DOMContentLoaded', () => {
                                    // Assuming FormWizard is defined in wizard.js
                                    new FormWizard(addresses);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('admin-assets/js/trackingForm.js') }}"></script>
    @endpush
@endsection
