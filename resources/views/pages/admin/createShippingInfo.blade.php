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
                                Create New Reciever
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
                                                <div class="nav-item col">
                                                    <a class="nav-link" id="step1-tab" href="#">
                                                        <div class="nav-no">1</div>
                                                        <div class="nav-text">Receiver Details</div>
                                                    </a>
                                                </div>
                                                <div class="nav-item col">
                                                    <a class="nav-link" id="step2-tab" href="#">
                                                        <div class="nav-no">2</div>
                                                        <div class="nav-text">Shipping Details</div>
                                                    </a>
                                                </div>
                                                <div class="nav-item col">
                                                    <a class="nav-link" id="step3-tab" href="#">
                                                        <div class="nav-no">3</div>
                                                        <div class="nav-text">Review & Confirm</div>
                                                    </a>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('clients.store') }}" method="POST"
                                                    id="shippingForm">
                                                    @csrf
                                                    <div class="step" id="step1">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="firstName">First Name</label>
                                                                <input type="text" class="form-control" id="firstName"
                                                                    name="firstName" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="lastName">Last Name</label>
                                                                <input type="text" class="form-control" id="lastName"
                                                                    name="lastName" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="email">Email</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text">@</span>
                                                                    <input type="email" class="form-control"
                                                                        id="email" name="email" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="phone">Phone
                                                                    Number</label>
                                                                <input type="tel" class="form-control" id="phone"
                                                                    name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="step d-none" id="step2">
                                                        <div class="row">
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label" for="address">Street Address</label>
                                                                <textarea class="form-control" id="address" name="address" rows="2" required 
                                                                    placeholder="Enter your complete street address"></textarea>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="city">City</label>
                                                                <input type="text" class="form-control" id="city" name="city" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="state">State/Province</label>
                                                                <input type="text" class="form-control" id="state" name="state" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="zipCode">Zip/Postal Code</label>
                                                                <input type="text" class="form-control" id="zipCode" name="zipCode" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="country">Country</label>
                                                                <select class="form-select" id="country" name="country" required>
                                                                    <option value="">Select Country</option>
                                                                    <option value="USA">United States</option>
                                                                    <option value="CAN">Canada</option>
                                                                    <option value="GBR">United Kingdom</option>
                                                                    <option value="AUS">Australia</option>
                                                                </select>
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
