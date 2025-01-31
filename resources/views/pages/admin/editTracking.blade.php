@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        // 'title' => $title,
    ])

    @include('components.adminSidebar')

    <div id="content" class="app-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="page-header">
                                Update Current Receiver
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <div id="wizardLayout1" class="mb-5">
                                <p class="mb-3">
                                    please fill out all the boxes befor proceeding...
                                </p>

                                <div class="row">
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header with-btn">
                                                Update Tracking Information
                                                <div class="card-header-btn">
                                                    <a href="#" data-toggle="card-collapse"
                                                        class="btn"><iconify-icon
                                                            icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                                    <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                                            icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                                    <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                                            icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form action="{{ route('trackings.update', $trackingInfo->id) }}" method="POST"
                                                            id="">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="step d-none" id="step1">

                                                                <!-- Tracking Number -->
                                                                <div class="mb-3 d-flex">
                                                                    <label for="trackingNumber"
                                                                        class="col-sm-2 col-form-label">Tracking
                                                                        Number</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            id="trackingNumber" name="tracking_number"
                                                                            placeholder="Enter or generate tracking number"
                                                                            value="{{ old('tracking_number', $trackingInfo->tracking_number) }}"
                                                                            readonly>
                                                                    </div>
                                                                    <div class="col-sm-2 mx-15px">
                                                                        <button type="button"
                                                                            class="btn btn-outline-primary"
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
                                                                                <option value="{{ $address->id }}"
                                                                                    {{ old('address_id', $trackingInfo->address_id) == $address->id ? 'selected' : '' }}
                                                                                    data-address="{{ $address->address }}"
                                                                                    data-city="{{ $address->city }}"
                                                                                    data-country="{{ $address->country }}">
                                                                                    {{ $address->address }},
                                                                                    {{ $address->city }},
                                                                                    {{ $address->country }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- Package Selection -->
                                                                <div class="mb-3 row">
                                                                    <label for="package_id"
                                                                        class="col-sm-2 col-form-label">Package</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-select" id="package_id"
                                                                            name="package_id">
                                                                            <option selected>Select Package</option>
                                                                            @foreach ($packages as $package)
                                                                                <option value="{{ $package->id }}"
                                                                                    {{ old('package_id', $trackingInfo->package_id) == $package->id ? 'selected' : '' }}
                                                                                    data-p_name="{{ $package->package_name }}"
                                                                                    data-weight="{{ $package->weight }}">
                                                                                    {{ $package->package_name }} ({{ $package->weight }}kg)
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <!-- Shipping Method -->
                                                                <div class="mb-3 row">
                                                                    <label for="shippingMethod"
                                                                        class="col-sm-2 col-form-label">Shipping
                                                                        Method</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-select" id="shippingMethod"
                                                                            name="shipping_method">
                                                                            <option value="standard"
                                                                                {{ old('shipping_method', $trackingInfo->shipping_method) == 'standard' ? 'selected' : '' }}>
                                                                                Standard</option>
                                                                            <option value="express"
                                                                                {{ old('shipping_method', $trackingInfo->shipping_method) == 'express' ? 'selected' : '' }}>
                                                                                Express</option>
                                                                            <option value="overnight"
                                                                                {{ old('shipping_method', $trackingInfo->shipping_method) == 'overnight' ? 'selected' : '' }}>
                                                                                Overnight</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                {{-- {{ dd($trackingInfo) }} --}}

                                                                <!-- Shipping Date -->
                                                                <div class="mb-3 row">
                                                                    <label for="shippingDate"
                                                                        class="col-sm-2 col-form-label">Shipping
                                                                        Date</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" class="form-control"
                                                                            id="shipDate" name="ship_date"
                                                                            value="{{ $formattedShipDate ?? old('ship_date') }}">

                                                                    </div>
                                                                </div>

                                                                <!-- Estimated Delivery Date -->
                                                                <div class="mb-3 row">
                                                                    <label for="deliveryDate"
                                                                        class="col-sm-2 col-form-label">Estimated Delivery
                                                                        Date</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" class="form-control"
                                                                            id="deliveryDate" name="delivery_date"
                                                                            value="{{ $formattedDeliveryDate ?? old('delivery_date') }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Carrier Name -->
                                                                <div class="mb-3 row">
                                                                    <label for="carrierName"
                                                                        class="col-sm-2 col-form-label">Carrier
                                                                        Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            id="carrierName" name="carrier_name"
                                                                            placeholder="Enter carrier name"
                                                                            value="{{ old('carrier_name', $trackingInfo->carrier_name) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Shipping Cost -->
                                                                <div class="mb-3 row">
                                                                    <label for="shippingCost"
                                                                        class="col-sm-2 col-form-label">Shipping
                                                                        Cost</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" step="0.01"
                                                                            class="form-control" id="shippingCost"
                                                                            name="shipping_cost"
                                                                            placeholder="Enter shipping cost"
                                                                            value="{{ old('shipping_cost', $trackingInfo->shipping_cost) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Current Location -->
                                                                <div class="mb-3 row">
                                                                    <label for="currentLocation"
                                                                        class="col-sm-2 col-form-label">Current
                                                                        Location</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            id="currentLocation" name="current_location"
                                                                            placeholder="Enter current location"
                                                                            value="{{ old('current_location', $trackingInfo->current_location) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Notes -->
                                                                <div class="mb-3 row">
                                                                    <label for="notes"
                                                                        class="col-sm-2 col-form-label">Notes</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control" id="notes" name="notes" placeholder="Enter any notes about the package">{{ old('notes', $trackingInfo->notes) }}</textarea>
                                                                    </div>
                                                                </div>

                                                                <!-- Status Radios -->
                                                                <fieldset class="mb-3">
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-form-label col-sm-2 pt-0">Status</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="package_status" class="form-select" required>
                                                                                <option value="pending" {{ old('package_status', $trackingInfo->package_status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                                <option value="in_transit" {{ old('package_status', $trackingInfo->package_status) == 'in_transit' ? 'selected' : '' }}>In Transit</option>
                                                                                <option value="delivered" {{ old('package_status', $trackingInfo->package_status) == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>

                                                                <div class="row">
                                                                    <!-- Delayed Checkbox -->
                                                                    <div class="mb-3 d-flex justify-content-between">
                                                                        <label for="isDelayed"
                                                                            class="col-sm-2 col-form-label">Is
                                                                            Delayed</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="hidden" name="is_delayed"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="isDelayed"
                                                                                name="is_delayed" value="1"
                                                                                {{ old('is_delayed', $trackingInfo->is_delayed) ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Returned Checkbox -->
                                                                    <div class="mb-3 d-flex justify-content-between">
                                                                        <label for="isReturned"
                                                                            class="col-sm-2 col-form-label">Is
                                                                            Returned</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="hidden" name="is_returned"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="isReturned"
                                                                                name="is_returned" value="1"
                                                                                {{ old('is_returned', $trackingInfo->is_returned) ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Insured Checkbox -->
                                                                    <div class="mb-3 d-flex justify-content-between">
                                                                        <label for="isInsured"
                                                                            class="col-sm-2 col-form-label">Is
                                                                            Insured</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="hidden" name="is_insured"
                                                                                value="0">
                                                                            <input type="checkbox"
                                                                                class="form-check-input" id="isInsured"
                                                                                name="is_insured" value="1"
                                                                                {{ old('is_insured', $trackingInfo->is_insured) ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row mt-4">
                                                                <div class="col-6 text-end">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-outline-success"
                                                                        id="submitBtn">Submit</button>
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
                                    <div class="col-4">
                                        <!-- BEGIN #selectMenu -->
                                        <div id="selectMenu" class="mb-5">
                                            <div class="card">
                                                <div class="card-header with-btn">
                                                    Select New Address
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <!-- Address -->
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="address">Address</label>
                                                            <input type="text" class="form-control" id="address" 
                                                                name="address" readonly required>
                                                        </div>

                                                        <!-- City -->
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="city">City</label>
                                                            <input type="text" class="form-control" id="city" 
                                                                name="city" readonly required>
                                                        </div>

                                                        <!-- Country -->
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="country">Country</label>
                                                            <input type="text" class="form-control" id="country" 
                                                                name="country" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>


                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const addressSelect = document.getElementById('address_id');
                                    const packageSelect = document.getElementById('package_id');

                                    function updateDetails(selectElement, prefix) {
                                        const selectedOption = selectElement.options[selectElement.selectedIndex];
                                        document.getElementById(prefix + 'Name').value = selectedOption.dataset.address || '';
                                        document.getElementById(prefix + 'City').value = selectedOption.dataset.city || '';
                                        document.getElementById(prefix + 'Country').value = selectedOption.dataset.country || '';
                                    }

                                    addressSelect.addEventListener('change', () => {
                                        const selectedOption = addressSelect.options[addressSelect.selectedIndex];
                                        document.getElementById('address').value = selectedOption.dataset.address;
                                        document.getElementById('city').value = selectedOption.dataset.city;
                                        document.getElementById('country').value = selectedOption.dataset.country;
                                    });

                                    // Initialize package display
                                    updatePackageDisplay(packageSelect);
                                    
                                    // Live update on change
                                    packageSelect.addEventListener('change', function() {
                                        updatePackageDisplay(this);
                                    });

                                    function updatePackageDisplay(selectElement) {
                                        const selectedOption = selectElement.options[selectElement.selectedIndex];
                                        const displayName = document.getElementById('packageName');
                                        const displayWeight = document.getElementById('packageWeight');
                                        
                                        // Fallback to option text if data attribute missing
                                        displayName.value = selectedOption.dataset.p_name || selectedOption.textContent;
                                        displayWeight.value = selectedOption.dataset.weight ? 
                                            `${selectedOption.dataset.weight} kg` : '';
                                    }
                                });
                            </script>

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
