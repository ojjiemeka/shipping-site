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
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-xl-9">
                            <h1 class="page-header">
                                {{$title}}
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <div id="wizardLayout1" class="mb-5">
                                <p class="mb-3">
                                    Please fill out all the required fields before proceeding...
                                </p>
                                <div class="card">
                                    <div class="card-header with-btn d-flex justify-content-between align-items-center">
                                        <span>WIZARD</span>
                                        <div class="card-header-btn">
                                            <a href="#" class="btn" data-toggle="card-collapse">
                                                <iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon>
                                            </a>
                                            <a href="#" class="btn" data-toggle="card-expand">
                                                <iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon>
                                            </a>
                                            <a href="#" class="btn" data-toggle="card-remove">
                                                <iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="nav-wizards-container">
                                            <nav class="nav nav-wizards-1 mb-2">
                                                <div class="nav-item col">
                                                    <a class="nav-link" id="step1-tab" href="#">
                                                        <div class="nav-no">1</div>
                                                        <div class="nav-text">Enter Package Details</div>
                                                    </a>
                                                </div>
                                                <div class="nav-item col">
                                                    <a class="nav-link" id="step2-tab" href="#">
                                                        <div class="nav-no">2</div>
                                                        <div class="nav-text">Review & Confirm</div>
                                                    </a>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('packages.update', $packageInfo->id) }}" method="POST"
                                                    id="trackingForm">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="step" id="step1">
                                                        <div class="row">

                                                            {{-- {{dd($packageInfo->id)}} --}}
                                                            <!-- Package Name -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="packageName">Package Name</label>
                                                                <input type="text" class="form-control @error('package_name') is-invalid @enderror" id="packageName"
                                                                       name="package_name"
                                                                       value="{{ old('package_name', $packageInfo->package_name ?? '') }}" required>
                                                                @error('package_name')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
        
                                                            <!-- Weight -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="weight">Weight (kg)</label>
                                                                <input type="number" step="0.01" class="form-control @error('weight') is-invalid @enderror" id="weight"
                                                                       name="weight"
                                                                       value="{{ old('weight', $packageInfo->weight ?? '') }}" required>
                                                                @error('weight')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
        
                                                            <!-- Amount -->
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label" for="amount">Amount</label>
                                                                <input type="number" step="0.01" class="form-control @error('amount') is-invalid @enderror" id="amount"
                                                                       name="amount"
                                                                       value="{{ old('amount', $packageInfo->amount ?? '') }}" required>
                                                                @error('amount')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
        
                                                            <!-- Description -->
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label" for="description">Description</label>
                                                                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                                                          name="description" rows="3">{{ old('description', $packageInfo->description ?? '') }}</textarea>
                                                                @error('description')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="step d-none" id="step2">
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
                                                                id="prevBtn">Back</button>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-lg btn-outline-theme"
                                                                id="nextBtn">Next</button>
                                                            <button type="submit" class="btn btn-lg btn-outline-success"
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

    @push('scripts')
        <script src="{{ asset('admin-assets/js/packages.js') }}"></script>
    @endpush
@endsection
