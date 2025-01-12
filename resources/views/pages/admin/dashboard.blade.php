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
                    <!-- BEGIN col-2 -->
                    <div class="col-xl-2 col-lg-4 col-6">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header">PAGE VIEWS</div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">12,543</div>
                                <p class="text-white fs-10px mb-0">
                                    +8.5% vs last month
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-2 -->

                    <!-- BEGIN col-2 -->
                    <div class="col-xl-2 col-lg-4 col-6">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header">AVG SESS. DURATION</div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">02:34</div>
                                <p class="text-white fs-10px mb-0">
                                    +12.3% vs last quarter
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-2 -->

                    <!-- BEGIN col-2 -->
                    <div class="col-xl-2 col-lg-4 col-6">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header">NEW VISITORS</div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">45.2%</div>
                                <p class="text-white fs-10px mb-0">
                                    -3.2% vs last week
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-2 -->

                    <!-- BEGIN col-2 -->
                    <div class="col-xl-2 col-lg-4 col-6">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header">BOUNCE RATE</div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">32.6%</div>
                                <p class="text-white fs-10px mb-0">
                                    -0.5% vs last month
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-2 -->

                    <!-- BEGIN col-2 -->
                    <div class="col-xl-2 col-lg-4 col-6">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header">TOP REFERRING SITES</div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">Google</div>
                                <p class="text-white fs-10px mb-0">
                                    2 new referrals added
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-2 -->

                    <!-- BEGIN col-2 -->
                    <div class="col-xl-2 col-lg-4 col-6">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header">COUNTRIES REACH</div>
                            <!-- END card-header -->

                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="h4 fw-100 text-theme mb-1">87</div>
                                <p class="text-white fs-10px mb-0">
                                    +5 countries vs last year
                                </p>
                                <p class="fs-9px mb-0 text-white text-opacity-50">
                                    updated 1 min ago
                                </p>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-2 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END col-12 -->


            <!-- BEGIN col-4 -->
            <div class="col-xl-12">
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
                                <table class="table-py-1px fs-10px fw-semibold text-white">
                                    <tbody>
                                        <tr>
                                            <td class="pe-3 text-white text-opacity-50">FIREWALL:</td>
                                            <td>ENABLED</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-3 text-white text-opacity-50">PERMISSION:</td>
                                            <td>ADMIN</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-3 text-white text-opacity-50">ENCRYPTION:</td>
                                            <td>AES-256</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-3 text-white text-opacity-50">IDS LEVEL:</td>
                                            <td>High</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-3 text-white text-opacity-50">ACCESS CONTROL:</td>
                                            <td>BIOMETRIC AUTHENTICATION</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-12 -->

                    <!-- BEGIN col-12 -->
                    <div class="col-lg-12">
                        <!-- BEGIN card -->
                        <div class="card h-100">
                            <!-- BEGIN card-header -->
                            <div class="card-header with-btn">
                                MARKETING CAMPAIGN
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
                                <div class="row">
                                    <div class="col-6">
                                        <div class="fw-semibold text-white text-opacity-50 fs-10px mb-2">CONVERSION RATE</div>
                                        <div class="h4 text-theme mb-2">12%</div>
                                        <div class="fs-10px">
                                            <span class="text-white fw-semibold">294k</span> total clicks<br />
                                            <span class="text-white fw-semibold">23%</span> click-through rate
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fw-semibold text-white text-opacity-50 fs-10px mb-2">USER REACHED</div>
                                        <div class="h4 text-theme mb-2">7.58m</div>
                                        <div class="fs-10px">
                                            <span class="text-white fw-semibold">23%</span> bounce rate <br />
                                            <span class="text-white fw-semibold">85%</span> engagement rate
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="d-flex align-items-center">
                                    <div class="w-60px">
                                        <div
                                            class="h-60px h-60px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white fs-36px">
                                            <iconify-icon icon="material-symbols-light:ads-click"></iconify-icon>
                                        </div>
                                    </div>
                                    <div class="flex-1 ps-3 fs-10px text-truncate text-white">
                                        <div class="fw-semibold">PAID SEARCH ADS</div>
                                        <div class="text-white text-opacity-50">MON 26/6 - SUN 2/7</div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="progress h-4px bg-white bg-opacity-10">
                                                    <div class="progress-bar progress-bar-striped bg-theme" data-animation="width"
                                                        data-value="68%" style="width: 68%"></div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-30px text-center"><span data-animation="number"
                                                    data-value="68">68</span>%</div>
                                        </div>
                                        <div class="text-white text-opacity-50 text-truncate">
                                            47.8% people made a purchase after clicking the ad
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="d-flex align-items-center">
                                    <div class="w-60px">
                                        <div
                                            class="h-60px h-60px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white fs-36px">
                                            <iconify-icon
                                                icon="material-symbols-light:video-camera-front-outline-sharp"></iconify-icon>
                                        </div>
                                    </div>
                                    <div class="flex-1 ps-3 fs-10px text-truncate text-white">
                                        <div class="fw-semibold">VIDEO AD CAMPAIGN</div>
                                        <div class="text-white text-opacity-50">MON 17/7 - SUN 23/7</div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="progress h-4px bg-white bg-opacity-10">
                                                    <div class="progress-bar progress-bar-striped bg-theme" data-animation="width"
                                                        data-value="85%" style="width: 85%"></div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-30px text-center"><span data-animation="number"
                                                    data-value="85">85</span>%</div>
                                        </div>
                                        <div class="text-white text-opacity-50 text-truncate">
                                            54.6% viewers watched till the end
                                        </div>
                                    </div>
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

        <div class="d-flex align-items-center mb-3 mt-50px"> 
            <div class="ms-auto">
                <a href="{{route('clients.create')}}" class="btn btn-theme btn-sm fs-11px py-2 w-140px d-flex align-items-center justify-content-center">
                    <iconify-icon icon="material-symbols-light:add" class="fs-22px me-1 ms-n3 my-n3"></iconify-icon>
                    CREATE ORDERS
                </a>
            </div>
        </div>
        
        <div class="mb-md-4 mb-3 d-md-flex">
            <div class="mt-sm-0 mt-2 me-2"><a href="#" class="text-body text-decoration-none d-flex align-items-center"><iconify-icon icon="material-symbols-light:download-sharp" class="fs-20px opacity-5 me-2 my-n1"></iconify-icon> Export</a></div>
            <div class="ms-md-4 mt-md-0 mt-2 dropdown-toggle">
                <a href="#" data-bs-toggle="dropdown" class="text-body text-decoration-none">More Actions</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        
        <div class="card">
            <ul class="nav nav-tabs nav-tabs-v2 px-2 small text-uppercase mb-4">
                <li class="nav-item me-4"><a href="#allTab" class="nav-link active px-2 py-2" data-bs-toggle="tab">All</a></li>
                <li class="nav-item me-4"><a href="#publishedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Unfulfilled</a></li>
                <li class="nav-item me-4"><a href="#expiredTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Unpaid</a></li>
                <li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Open</a></li>
                <li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Closed</a></li>
                <li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Local delivery</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="allTab">
                    <!-- BEGIN input-group -->
                    <div class="input-group mb-4">
                        <div class="flex-fill position-relative">
                            <div class="input-group">
                                <input type="text" class="form-control ps-35px" placeholder="Filter orders">
                                <div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0" style="z-index: 1020;">
                                    <i class="fa fa-search opacity-5"></i>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Payment Status</span><span class="d-inline d-md-none"><i class="fa fa-credit-card"></i></span> &nbsp;</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Fulfillment status</span><span class="d-inline d-md-none"><i class="fa fa-check"></i></span>  &nbsp;</button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <!-- END input-group -->
                    
                    <!-- BEGIN table -->
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap small mb-4">
                            <thead>
                                <tr class="text-uppercase">
                                    <th></th>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>s
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->
                    
                    <div class="d-md-flex align-items-center">
                        <div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
                            Showing 1 to 20 of 57 entries
                        </div>
                        <ul class="pagination mb-0 justify-content-center">
                            <li class="page-item disabled"><a class="page-link">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END #content -->

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade">
        <iconify-icon icon="material-symbols-light:keyboard-arrow-up"></iconify-icon>
    </a>
    <!-- END btn-scroll-top -->
@endsection
