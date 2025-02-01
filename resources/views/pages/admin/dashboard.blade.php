@extends('layouts.admin')

@section('content')
    @include('components.loader')


    @include('components.adminHeader', [
        'title' => $title,
        'description' => $description,
    ])

    @include('components.adminSidebar')


    <!-- BEGIN mobile-sidebar-backdrop -->
    <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
        data-toggle-class="app-sidebar-mobile-toggled"></button>
    <!-- END mobile-sidebar-backdrop -->

    <!-- BEGIN #content -->
    <div id="content" class="app-content p-3">
        <!-- BEGIN row -->
        <div class="row g-2">
            <!-- BEGIN col-12 -->
            <div class="col-xl-12">
                <!-- BEGIN row -->
                <div class="row g-2">
                    <!-- BEGIN Packages Count -->
                    <div class="col-xl-3 col-lg-3 col-6">
                        <div class="card h-100">
                            <div class="card-header">PACKAGES COUNT</div>
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">{{ number_format($packagesCount) }}</div>
                                <p class="text-white fs-10px mb-0">
                                    Total registered packages
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END Packages Count -->
        
                    <!-- BEGIN Tracking Count -->
                    <div class="col-xl-3 col-lg-3 col-6">
                        <div class="card h-100">
                            <div class="card-header">TRACKING COUNT</div>
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">{{ number_format($trackingCount) }}</div>
                                <p class="text-white fs-10px mb-0">
                                    Active tracking numbers
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END Tracking Count -->
        
                    <!-- BEGIN Address Count -->
                    <div class="col-xl-3 col-lg-3 col-6">
                        <div class="card h-100">
                            <div class="card-header">ADDRESS COUNT</div>
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">{{ number_format($addressCount) }}</div>
                                <p class="text-white fs-10px mb-0">
                                    Stored customer addresses
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END Address Count -->
        
                    <!-- BEGIN Client Count -->
                    <div class="col-xl-3 col-lg-3 col-6">
                        <div class="card h-100">
                            <div class="card-header">CLIENT COUNT</div>
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">{{ number_format($clientCount) }}</div>
                                <p class="text-white fs-10px mb-0">
                                    Registered system clients
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END Client Count -->
                </div>
                <!-- END row -->
            </div>
            <!-- END col-12 -->


            <!-- BEGIN col-4 -->
            <div class="col-xl-12 mt-5">
                <!-- BEGIN row -->
                <div class="row gy-2">
                    <!-- BEGIN col-12 -->
                    <div class="col-lg-12">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header with-btn">
                                SECURITY SETTINGS
                                <div class="card-header-btn">
                                    <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                            icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                    <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                            icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                    <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                            icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                </div>
                            </div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <a href="{{ route('clients.create') }}" class="text-theme hover-opacity-75 text-decoration-none d-flex flex-column align-items-center">
                                        <i class="fas fa-user-plus fa-2x p-2"></i>
                                        <span class="fs-6">Add Client</span>
                                    </a>
                                    <a href="{{ route('packages.create') }}" class="text-theme hover-opacity-75 text-decoration-none d-flex flex-column align-items-center">
                                        <i class="fab fa-dropbox fa-2x p-2"></i>
                                        <span class="fs-6">Add Package</span>
                                    </a>
                                    <a href="{{ route('trackings.create') }}" class="text-theme hover-opacity-75 text-decoration-none d-flex flex-column align-items-center">
                                        <i class="fas fa-address-book fa-2x p-2"></i>
                                        <span class="fs-6">Add Tracking Info</span>
                                    </a>
                                    <a href="{{ route('clients.index') }}" class="text-theme hover-opacity-75 text-decoration-none d-flex flex-column align-items-center">
                                        <i class="fas fa-eye fa-2x p-2"></i>
                                        <span class="fs-6">View All Receiver Info</span>
                                    </a>
                                    <a href="{{ route('trackings.index') }}" class="text-theme hover-opacity-75 text-decoration-none d-flex flex-column align-items-center">
                                        <i class="fas fa-eye fa-2x p-2"></i>
                                        <span class="fs-6">View All Tracking Info</span>
                                    </a>
                                </div>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-12 -->
                </div>
                <!-- END col-12 -->
            </div>
            <!-- END col-4 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END #content -->

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade">
        <iconify-icon icon="material-symbols-light:keyboard-arrow-up"></iconify-icon>
    </a>
    <!-- END btn-scroll-top -->
@endsection
