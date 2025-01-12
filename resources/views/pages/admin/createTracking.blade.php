@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        'title' => $title,
        'description' => $description,
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

                            <!-- BEGIN #trackingForm -->
                            <div id="trackingForm" class="mb-5">
                                <h4>Package Tracking Form</h4>
                                <p>Use this form to track the status of your package. Enter the tracking details or generate
                                    a tracking number for a new package.</p>
                                <div class="card">
                                    <div class="card-header with-btn">
                                        TRACK YOUR PACKAGE
                                        <div class="card-header-btn">
                                            <a href="#" data-toggle="card-collapse" class="btn">
                                                <iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon>
                                            </a>
                                            <a href="#" data-toggle="card-expand" class="btn">
                                                <iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon>
                                            </a>
                                            <a href="#" data-toggle="card-remove" class="btn">
                                                <iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('trackings.store') }}">
                                            @csrf
                                            <!-- Tracking Number -->
                                            <div class="mb-3 d-flex">
                                                <label for="trackingNumber" class="col-sm-2 col-form-label">Tracking
                                                    Number</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="trackingNumber"
                                                        name="tracking_number"
                                                        placeholder="Enter or generate tracking number" readonly>
                                                </div>
                                                <div class="col-sm-2 mx-15px">
                                                    <button type="button" class="btn btn-outline-primary"
                                                        id="generateTrackingNumber">Generate</button>
                                                </div>
                                            </div>

                                            <!-- Address Selection -->
                                            <div class="mb-3 row">
                                                <label for="address_id" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" id="address_id" name="address_id">
                                                        <option selected>Select Address</option>
                                                        @foreach ($addresses as $address)
                                                            <option value="{{ $address->id }}">
                                                                {{ $address->address_line_1 }}, {{ $address->city }},
                                                                {{ $address->country }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Shipping Method -->
                                            <div class="mb-3 row">
                                                <label for="shippingMethod" class="col-sm-2 col-form-label">Shipping
                                                    Method</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" id="shippingMethod" name="shipping_method">
                                                        <option selected>Select Shipping Method</option>
                                                        <option value="standard">Standard</option>
                                                        <option value="express">Express</option>
                                                        <option value="overnight">Overnight</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Shipping Date -->
                                            <div class="mb-3 row">
                                                <label for="shippingDate" class="col-sm-2 col-form-label">Shipping
                                                    Date</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" id="shippingDate"
                                                        name="shipping_date">
                                                </div>
                                            </div>

                                            <!-- Carrier Name -->
                                            <div class="mb-3 row">
                                                <label for="carrierName" class="col-sm-2 col-form-label">Carrier
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="carrierName"
                                                        name="carrier_name" placeholder="Enter carrier name">
                                                </div>
                                            </div>

                                            <!-- Shipping Cost -->
                                            <div class="mb-3 row">
                                                <label for="shippingCost" class="col-sm-2 col-form-label">Shipping
                                                    Cost</label>
                                                <div class="col-sm-10">
                                                    <input type="number" step="0.01" class="form-control"
                                                        id="shippingCost" name="shipping_cost"
                                                        placeholder="Enter shipping cost">
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
                                                            <label class="form-check-label" for="statusInTransit">In
                                                                Transit</label>
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
                                                                name="package_status" id="statusPending" value="pending">
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
                                                        <input type="hidden" name="is_delayed" value="0">
                                                        <input type="checkbox" class="form-check-input" id="isDelayed"
                                                            name="is_delayed" value="1">
                                                    </div>
                                                </div>

                                                <!-- Returned Checkbox -->
                                                <div class="mb-3 d-flex justify-content-between">
                                                    <label for="isReturned" class="col-sm-2 col-form-label">Is
                                                        Returned</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" name="is_returned" value="0">
                                                        <input type="checkbox" class="form-check-input" id="isReturned"
                                                            name="is_returned" value="1">
                                                    </div>
                                                </div>

                                                <!-- Insured Checkbox -->
                                                <div class="mb-3 d-flex justify-content-between">
                                                    <label for="isInsured" class="col-sm-2 col-form-label">Is
                                                        Insured</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" name="is_insured" value="0">
                                                        <input type="checkbox" class="form-check-input" id="isInsured"
                                                            name="is_insured" value="1">
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Submit Button -->
                                            <div class="form-group row">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button type="submit" class="btn btn-outline-theme">Track
                                                        Package</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- BEGIN #toastsContainer -->
                                    <div id="toastsContainer" class="mb-5">
                                        <h4>Toasts Container</h4>
                                        <p>Toasts container is an extended ui from Bootstrap toasts. Wrap the toasts with
                                            <code>.toasts-container</code> will allow toast to float within the right top
                                            position.
                                        </p>
                                        <div class="card">
                                            <div class="card-header with-btn">
                                                INSTALLATION
                                                <div class="card-header-btn">
                                                    <a href="#" data-toggle="card-collapse"
                                                        class="btn"><iconify-icon
                                                            icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                                    <a href="#" data-toggle="card-expand"
                                                        class="btn"><iconify-icon
                                                            icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                                    <a href="#" data-toggle="card-remove"
                                                        class="btn"><iconify-icon
                                                            icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-theme me-2" data-toggle="toast"
                                                    data-target="#toast-1">Show toast 1</a>
                                                <a href="#" class="btn btn-theme" data-toggle="toast"
                                                    data-target="#toast-2">Show toast 2</a>
                                            </div>
                                            <div class="hljs-container">
                                                <pre><code class="xml" data-url="assets/data/ui-modal-notification/code-5.json"></code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END #toastsNotification -->
                                </div>
                            </div>
                            <!-- END #trackingForm -->

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('admin-assets/js/wizard.js') }}"></script>
    @endpush
@endsection
