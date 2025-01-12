@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        'title' => $title,
    ])

    @include('components.adminSidebar')

    <div id="content" class="app-content">
        <div class="container">
            <div class="mb-md-4 mb-3 d-md-flex">
                <div class="mt-sm-0 mt-2 me-2"><a href="#"
                        class="text-body text-decoration-none d-flex align-items-center"><iconify-icon
                            icon="material-symbols-light:download-sharp" class="fs-20px opacity-5 me-2 my-n1"></iconify-icon>
                        Export</a></div>
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
                    <li class="nav-item me-4"><a href="#allTab" class="nav-link active px-2 py-2"
                            data-bs-toggle="tab">All</a></li>
                    <li class="nav-item me-4"><a href="#publishedTab" class="nav-link px-2 py-2"
                            data-bs-toggle="tab">Unfulfilled</a></li>
                    <li class="nav-item me-4"><a href="#expiredTab" class="nav-link px-2 py-2"
                            data-bs-toggle="tab">Unpaid</a></li>
                    <li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Open</a>
                    </li>
                    <li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2"
                            data-bs-toggle="tab">Closed</a></li>
                    <li class="nav-item me-4"><a href="#deletedTab" class="nav-link px-2 py-2" data-bs-toggle="tab">Local
                            delivery</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="allTab">
                        <!-- BEGIN input-group -->
                        <div class="input-group mb-4">
                            <div class="flex-fill position-relative">
                                <div class="input-group">
                                    <input type="text" class="form-control ps-35px" placeholder="Filter orders">
                                    <div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0"
                                        style="z-index: 1020;">
                                        <i class="fa fa-search opacity-5"></i>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"><span
                                    class="d-none d-md-inline">Payment Status</span><span class="d-inline d-md-none"><i
                                        class="fa fa-credit-card"></i></span> &nbsp;</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"><span
                                    class="d-none d-md-inline">Fulfillment status</span><span class="d-inline d-md-none"><i
                                        class="fa fa-check"></i></span> &nbsp;</button>
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
                                        <td class="align-middle"><span
                                                class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                        <td class="align-middle"><span
                                                class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span>
                                        </td>
                                        <td class="align-middle">3 items</td>
                                        <td class="align-middle">Free shipping</td>
                                    </tr>
                                    @foreach ($trackings as $tracking)
                                        <tr>
                                            <td class="w-10px align-middle">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="product{{ $loop->iteration }}">
                                                    <label class="form-check-label"
                                                        for="product{{ $loop->iteration }}"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle"><a href="page_order_details.html">#1950</a></td>
                                            <td class="align-middle">Thu 26 Nov, 12:23pm</td>
                                            <!-- Replace with actual date -->
                                            <td class="align-middle">{{ $client->firstName }} {{ $client->lastName }}</td>
                                            <td class="align-middle">{{ $client->email }}</td>
                                            <td class="align-middle">{{ $client->phone }}</td>
                                            @if ($client->address)
                                                <td class="align-middle">{{ $client->address->address }}</td>
                                                <td class="align-middle">{{ $client->address->city }}</td>
                                                <td class="align-middle">{{ $client->address->state }}</td>
                                                <td class="align-middle">{{ $client->address->zipCode }}</td>
                                                <td class="align-middle">{{ $client->address->country }}</td>
                                            @else
                                                <td colspan="5" class="text-center">No address available</td>
                                            @endif
                                        </tr>
                                    @endforeach
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
                                        <td class="align-middle"><span
                                                class="badge bg-success bg-opacity-15 text-success py-4px px-2 fs-9px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PAID</span></td>
                                        <td class="align-middle"><span
                                                class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> FULFILLED</span>
                                        </td>
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
                                        <td class="align-middle"><span
                                                class="badge bg-warning bg-opacity-15 text-warning py-4px px-2 fs-9px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> PENDING</span>
                                        </td>
                                        <td class="align-middle"><span
                                                class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center"><i
                                                    class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i>
                                                UNFULFILLED</span></td>
                                        <td class="align-middle">2 items</td>
                                        <td class="align-middle">Express</td>
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
    </div>

    @push('scripts')
        <script src="{{ asset('admin-assets/js/wizard.js') }}"></script>
    @endpush
@endsection
