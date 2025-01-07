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

            <!-- BEGIN col-8 -->
            <div class="col-xl-8">
                <!-- BEGIN card -->
                <div class="card h-100">
                    <!-- BEGIN card-header -->
                    <div class="card-header with-btn">
                        TRAFFIC ANALYTICS
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
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-8 position-relative">
                                <!-- BEGIN map -->
                                <div id="world-map" class="" style="height: 344px;"></div>
                                <div
                                    class="position-absolute text-white fs-10px bottom-0 end-0 start-0 p-15px d-flex align-items-center">
                                    <iconify-icon class="text-white fs-30px me-2"
                                        icon="solar:map-point-rotate-bold-duotone"></iconify-icon>
                                    <div class="flex-1">
                                        Real-time data updates every 5 minutes, providing insights into visitor traffic
                                        patterns and peak times. Click on any location for detailed analytics.
                                    </div>
                                </div>
                                <!-- END map -->
                            </div>
                            <div class="col-lg-4">
                                <div class="p-3">
                                    <div class="h4 text-theme mb-0 fw-100">[33,129]</div>
                                    <p class="text-white fs-10px fw-semibold mb-0">TOTAL VISITS</p>

                                    <hr class="my-2" />

                                    <table class="w-100 text-truncate fs-10px">
                                        <thead>
                                            <tr class="text-white">
                                                <th class="w-50">COUNTRY</th>
                                                <th class="w-25 text-end">VISITS</th>
                                                <th class="w-25 text-end">PCT%</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-body text-opacity-75">
                                            <tr>
                                                <td>FRANCE</td>
                                                <td class="text-end">13,849</td>
                                                <td class="text-end">40.79%</td>
                                            </tr>
                                            <tr>
                                                <td>SPAIN</td>
                                                <td class="text-end">3,216</td>
                                                <td class="text-end">9.79%</td>
                                            </tr>
                                            <tr class="text-theme fw-bold bg-white bg-opacity-10">
                                                <td>MEXICO</td>
                                                <td class="text-end">1,398</td>
                                                <td class="text-end">4.26%</td>
                                            </tr>
                                            <tr>
                                                <td>UNITED STATES</td>
                                                <td class="text-end">1,090</td>
                                                <td class="text-end">3.32%</td>
                                            </tr>
                                            <tr>
                                                <td>BELGIUM</td>
                                                <td class="text-end">1,045</td>
                                                <td class="text-end">3.18%</td>
                                            </tr>
                                            <tr>
                                                <td>INDIA</td>
                                                <td class="text-end">1,033</td>
                                                <td class="text-end">3.09%</td>
                                            </tr>
                                            <tr>
                                                <td>BRAZIL</td>
                                                <td class="text-end">954</td>
                                                <td class="text-end">2.81%</td>
                                            </tr>
                                            <tr>
                                                <td>JAPAN</td>
                                                <td class="text-end">911</td>
                                                <td class="text-end">3.09%</td>
                                            </tr>
                                            <tr>
                                                <td>ARCANIA</td>
                                                <td class="text-end">839</td>
                                                <td class="text-end">2.13%</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <hr class="my-2" />

                                    <table class="w-100 text-truncate fs-10px">
                                        <thead>
                                            <tr class="text-white">
                                                <th class="w-50">BROWSER</th>
                                                <th class="w-25 text-end">NO/m</th>
                                                <th class="w-25 text-end">PCT%</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-body text-opacity-75">
                                            <tr>
                                                <td>Chrome</td>
                                                <td class="text-end">8,000</td>
                                                <td class="text-end">40%</td>
                                            </tr>
                                            <tr>
                                                <td>Firefox</td>
                                                <td class="text-end">5,000</td>
                                                <td class="text-end">25%</td>
                                            </tr>
                                            <tr class="text-theme fw-600 bg-white bg-opacity-10">
                                                <td>Safari</td>
                                                <td class="text-end">3,000</td>
                                                <td class="text-end">15%</td>
                                            </tr>
                                            <tr>
                                                <td>Edge</td>
                                                <td class="text-end">2,000</td>
                                                <td class="text-end">10%</td>
                                            </tr>
                                            <tr>
                                                <td>Opera</td>
                                                <td class="text-end">1,000</td>
                                                <td class="text-end">5%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END card-body -->
                </div>
                <!-- END card -->
            </div>
            <!-- END col-8 -->

            <!-- BEGIN col-4 -->
            <div class="col-xl-4">
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
                <a href="#" class="btn btn-theme btn-sm fs-11px py-2 w-140px d-flex align-items-center justify-content-center">
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
                                    <th>Total</th>
                                    <th>Payment status</th>
                                    <th>Fulfillment status</th>
                                    <th>Items</th>
                                    <th>Delivery method</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product1">
                                            <label class="form-check-label" for="product1"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1950</a></td>
                                    <td class="align-middle">Thu 26 Nov, 12:23pm</td>
                                    <td class="align-middle">Amanda Lee</td>
                                    <td class="align-middle">$398.00</td>
                                    <td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                    <td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
                                    <td class="align-middle">3 items</td>
                                    <td class="align-middle">Free shipping</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product2">
                                            <label class="form-check-label" for="product2"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1949</a></td>
                                    <td class="align-middle">Thu 26 Nov, 11:54am</td>
                                    <td class="align-middle">Leonard Oii</td>
                                    <td class="align-middle">$496.00</td>
                                    <td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                    <td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Local pickup</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product3">
                                            <label class="form-check-label" for="product3"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1948</a></td>
                                    <td class="align-middle">Thu 25 Nov, 11:54pm</td>
                                    <td class="align-middle">John Doe</td>
                                    <td class="align-middle">$195.00</td>
                                    <td class="align-middle"><span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span></td>
                                    <td class="align-middle"><span class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED</span></td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product4">
                                            <label class="form-check-label" for="product4"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1947</a></td>
                                    <td class="align-middle">Thu 25 Nov, 11:53pm</td>
                                    <td class="align-middle">Terry Ng</td>
                                    <td class="align-middle">$195.00</td>
                                    <td class="align-middle"><span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span></td>
                                    <td class="align-middle"><span class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED</span></td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product5">
                                            <label class="form-check-label" for="product5"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1946</a></td>
                                    <td class="align-middle">Thu 25 Nov, 11:52pm</td>
                                    <td class="align-middle">Terry Ng</td>
                                    <td class="align-middle">$195.00</td>
                                    <td class="align-middle"><span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span></td>
                                    <td class="align-middle"><span class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED</span></td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product6">
                                            <label class="form-check-label" for="product6"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1945</a></td>
                                    <td class="align-middle">Thu 24 Nov, 2:43pm</td>
                                    <td class="align-middle">Lelouch Wong</td>
                                    <td class="align-middle">$900.00</td>
                                    <td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                    <td class="align-middle"><span class="badge bg-primary bg-opacity-15 text-primary py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> READY FOR PICKUP</span></td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Local pickup</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product7">
                                            <label class="form-check-label" for="product7"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1944</a></td>
                                    <td class="align-middle">Thu 23 Nov, 2:43pm</td>
                                    <td class="align-middle">Cynthia Ting</td>
                                    <td class="align-middle">$625.00</td>
                                    <td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                    <td class="align-middle"><span class="badge bg-primary bg-opacity-15 text-primary py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> READY FOR DELIVERY</span></td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Local pickup</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product8">
                                            <label class="form-check-label" for="product8"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1943</a></td>
                                    <td class="align-middle">Thu 23 Nov, 11:59am</td>
                                    <td class="align-middle">Richard Leong</td>
                                    <td class="align-middle">$195.00</td>
                                    <td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PARTIALLY REFUNDED</span></td>
                                    <td class="align-middle"><span class="badge bg-danger bg-opacity-15 text-danger py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PARTIALLY FULFILLED</span></td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product9">
                                            <label class="form-check-label" for="product9"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1942</a></td>
                                    <td class="align-middle">Thu 22 Nov, 8:12am</td>
                                    <td class="align-middle">Clement Tang</td>
                                    <td class="align-middle">$195.00</td>
                                    <td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                    <td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product10">
                                            <label class="form-check-label" for="product10"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="page_order_details.html">#1941</a></td>
                                    <td class="align-middle">Thu 22 Nov, 7:42am</td>
                                    <td class="align-middle">Richard Leong</td>
                                    <td class="align-middle">$195.00</td>
                                    <td class="align-middle"><span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                    <td class="align-middle"><span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span></td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product11">
                                            <label class="form-check-label" for="product11"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1942</a>
                                    </td>
                                    <td class="align-middle">Fri 23 Nov, 8:15am</td>
                                    <td class="align-middle">Sarah Connor</td>
                                    <td class="align-middle">$250.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
                                    </td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Standard</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product12">
                                            <label class="form-check-label" for="product12"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1943</a>
                                    </td>
                                    <td class="align-middle">Sat 24 Nov, 9:30am</td>
                                    <td class="align-middle">John Doe</td>
                                    <td class="align-middle">$120.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
                                    </td>
                                    <td class="align-middle">3 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product13">
                                            <label class="form-check-label" for="product13"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1944</a>
                                    </td>
                                    <td class="align-middle">Sun 25 Nov, 10:00am</td>
                                    <td class="align-middle">Jane Smith</td>
                                    <td class="align-middle">$310.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-danger bg-opacity-15 text-danger py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> CANCELLED </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
                                    </td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Standard</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product14">
                                            <label class="form-check-label" for="product14"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1945</a>
                                    </td>
                                    <td class="align-middle">Mon 26 Nov, 11:45am</td>
                                    <td class="align-middle">Michael Johnson</td>
                                    <td class="align-middle">$175.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
                                    </td>
                                    <td class="align-middle">4 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product15">
                                            <label class="form-check-label" for="product15"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1946</a>
                                    </td>
                                    <td class="align-middle">Tue 27 Nov, 12:20pm</td>
                                    <td class="align-middle">Emily Davis</td>
                                    <td class="align-middle">$80.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
                                    </td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Standard</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product16">
                                            <label class="form-check-label" for="product16"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1947</a>
                                    </td>
                                    <td class="align-middle">Wed 28 Nov, 1:05pm</td>
                                    <td class="align-middle">David Brown</td>
                                    <td class="align-middle">$230.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
                                    </td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product17">
                                            <label class="form-check-label" for="product17"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1948</a>
                                    </td>
                                    <td class="align-middle">Thu 29 Nov, 2:30pm</td>
                                    <td class="align-middle">Olivia Martin</td>
                                    <td class="align-middle">$150.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-danger bg-opacity-15 text-danger py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> CANCELLED </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
                                    </td>
                                    <td class="align-middle">3 items</td>
                                    <td class="align-middle">Standard</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product18">
                                            <label class="form-check-label" for="product18"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1949</a>
                                    </td>
                                    <td class="align-middle">Fri 30 Nov, 3:45pm</td>
                                    <td class="align-middle">Sophia White</td>
                                    <td class="align-middle">$95.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
                                    </td>
                                    <td class="align-middle">2 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product19">
                                            <label class="form-check-label" for="product19"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1950</a>
                                    </td>
                                    <td class="align-middle">Sat 1 Dec, 4:20pm</td>
                                    <td class="align-middle">James Black</td>
                                    <td class="align-middle">$110.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
                                    </td>
                                    <td class="align-middle">1 item</td>
                                    <td class="align-middle">Standard</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product20">
                                            <label class="form-check-label" for="product20"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1951</a>
                                    </td>
                                    <td class="align-middle">Sun 2 Dec, 5:35pm</td>
                                    <td class="align-middle">Charlotte Green</td>
                                    <td class="align-middle">$300.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED </span>
                                    </td>
                                    <td class="align-middle">3 items</td>
                                    <td class="align-middle">Express</td>
                                </tr>
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product21">
                                            <label class="form-check-label" for="product21"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="page_order_details.html">#1952</a>
                                    </td>
                                    <td class="align-middle">Mon 3 Dec, 6:50pm</td>
                                    <td class="align-middle">Henry King</td>
                                    <td class="align-middle">$220.00</td>
                                    <td class="align-middle">
                                        <span class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING </span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center">
                                            <i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> UNFULFILLED </span>
                                    </td>
                                    <td class="align-middle">4 items</td>
                                    <td class="align-middle">Standard</td>
                                </tr>
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
