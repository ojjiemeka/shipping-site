@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        'title' => $title,
    ])

    @include('components.adminSidebar')

    <div id="content" class="app-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="page-header">
                                Update Receiver Information
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <div id="wizardLayout1" class="mb-5">
                                <p class="mb-3">
                                    please fill out all the boxes befor proceeding...
                                </p>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header with-btn">
                                                Update Sender's Information
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
                                                        <form action="{{ route('clients.update', $clients->id) }}" method="POST"
                                                            id="">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="step d-none" id="step1">

                                                                <!-- Address Selection -->
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="firstName">First Name</label>
                                                                        <input type="text" class="form-control" id="firstName"
                                                                            name="firstName" value="{{ old('firstName', $clients->firstName) }}" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="lastName">Last Name</label>
                                                                        <input type="text" class="form-control" id="lastName"
                                                                            name="lastName" value="{{ old('lastName', $clients->lastName) }}" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="email">Email</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text">@</span>
                                                                            <input type="email" class="form-control"
                                                                                id="email" name="email" value="{{ old('email', $clients->email) }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="phone">Phone
                                                                            Number</label>
                                                                        <input type="tel" class="form-control" id="phone"
                                                                            name="phone" value="{{ old('phone', $clients->phone) }}">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-3">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="form-label" for="address">Street Address</label>
                                                                        <input class="form-control" id="address" name="address" rows="2" required 
                                                                            placeholder="Enter your complete street address" value="{{ old('address', $clients->address->address) }}">
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="city">City</label>
                                                                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $clients->address->city) }}" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="state">State/Province</label>
                                                                        <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $clients->address->state) }}" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="zipCode">Zip/Postal Code</label>
                                                                        <input type="text" class="form-control" id="zipCode" name="zipCode" value="{{ old('zipCode', $clients->address->zipCode) }}" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-label" for="country">Country</label>
                                                                        <select class="form-select" id="country" name="country" required>
                                                                            <option value="{{ old('country', $clients->address->country) }}">Selected: {{ old('country', $clients->address->country) }}</option>
                                                                            <option value="">Select Country</option>
                                                                            <option value="USA">United States</option>
                                                                            <option value="CAN">Canada</option>
                                                                            <option value="GBR">United Kingdom</option>
                                                                            <option value="AUS">Australia</option>
                                                                        </select>
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

                                </div>



                            </div>

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
