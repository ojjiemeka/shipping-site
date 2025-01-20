@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        'title' => $title,
    ])

    @include('components.adminSidebar')

    <div id="content" class="app-content">
        <div class="container">

            <div class="card mb-5">

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="allTab">
                        <!-- BEGIN input-group -->
                        <div class="input-group mb-4">
                            <div class="flex-fill position-relative">
                                <div class="mb-5">
                                    <h4>Tracking Information</h4>

                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control ps-35px" placeholder="Filter orders">
                                    <div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0"
                                        style="z-index: 1020;">
                                        <i class="fa fa-search opacity-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END input-group -->

                        <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap small mb-4">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th></th>
                                        <th>Client Name</th>
                                        <th>Address</th>
                                        <th>Tracking Number</th>
                                        <th>Package Name</th>
                                        <th>Package Status</th>
                                        <th>Shipping Method</th>
                                        {{-- <th>Shipping Date</th>
                                        <th>Estimated Delivery Date</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                            <!-- Address -->
                                            {{-- @dd($tracking->address) --}}
                                            @if ($tracking->address && $tracking->address->clients)
                                                <td class="align-middle">
                                                    {{ $tracking->address->clients->firstName }}
                                                    {{ $tracking->address->clients->lastName }}
                                                    <br>
                                                </td>
                                                <td>
                                                    {{ $tracking->address->address }}<br>
                                                    {{ $tracking->address->city }}, {{ $tracking->address->state }}
                                                    {{ $tracking->address->zip_code }}<br>
                                                    {{ $tracking->address->country }}
                                                </td>
                                            @else
                                                <td colspan="5" class="text-center">No address available</td>
                                            @endif
                                            <!-- Tracking Number -->
                                            <td class="align-middle"><a
                                                    href="page_order_details.html">{{ $tracking->tracking_number }}</a></td>
                                            <!-- Package Name -->
                                            <td class="align-middle">{{ $tracking->packages->package_name }}</td>
                                            <!-- Package Status -->
                                            <td class="align-middle">
                                                @if ($tracking->package_status == 'pending')
                                                    <span
                                                        class="badge bg-yellow bg-opacity-15 text-yellow py-4px px-2 fs-9px d-inline-flex align-items-center text-uppercase"><i
                                                            class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i>
                                                        Pending</span>
                                                @elseif ($tracking->package_status == 'delivered')
                                                    <span
                                                        class="badge bg-primary bg-opacity-15 text-primary py-4px px-2 fs-9px d-inline-flex align-items-center text-uppercase"><i
                                                            class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i>
                                                        DELIVERED</span>
                                                @elseif ($tracking->package_status == 'in_transit')
                                                    <span
                                                        class="badge bg-white bg-opacity-15 text-white text-opacity-75 py-4px px-2 fs-9px d-inline-flex align-items-center text-uppercase"><i
                                                            class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> In
                                                        transit</span>
                                                @else
                                                    <span
                                                        class="badge bg-gray bg-opacity-15 text-gray py-4px px-2 fs-9px d-inline-flex align-items-center text-uppercase"><i
                                                            class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> Unknown
                                                        Status</span>
                                                @endif
                                            </td>
                                            <!-- Shipping Method -->
                                            <td class="align-middle text-uppercase">
                                                {{ $tracking->shipping_method ?? 'N/A' }}</td>
                                            <!-- Shipping Date -->
                                            {{-- <td class="align-middle">{{ $tracking->ship_date ? \Carbon\Carbon::parse($tracking->ship_date)->format('D d M, H:i A') : 'N/A' }}</td> --}}
                                            <!-- Estimated Delivery Date -->
                                            {{-- <td class="align-middle">{{ $tracking->delivery_date ? \Carbon\Carbon::parse($tracking->delivery_date)->format('D d M, H:i A') : 'N/A' }}</td> --}}

                                            <td class="align-middle">
                                                <button type="button" class="btn btn-info btn-sm track-button"
                                                    data-bs-toggle="modal" data-bs-target="#modalXl"
                                                    data-tracking-id="{{ $tracking->id }}">
                                                    View
                                                </button>
                                                <a href="{{ route('trackings.edit', $tracking->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('trackings.destroy', $tracking->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Modal Structure -->
                                        <div class="modal fade" id="modalXl">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modal-title"></h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body text-uppercase">
                                                        <div id="tracking-details"></div>

                                                        <!-- Tracking Details -->
                                                        <h6>Tracking</h6>
                                                        <ul>
                                                            <li class="mb-2">Tracking Number: <span class="text-lime-400" id="tracking-number"></span></li>
                                                            <li class="mb-2">Status: <span id="package-status"></span></li>
                                                            <li class="mb-2">Shipping Method: <span id="shipping-method"></span></li>
                                                            <li class="mb-2">Ship Date: <span id="ship-date"></span></li>
                                                            <li class="mb-2">Delivery Date: <span id="delivery-date"></span></li>
                                                            <li class="mb-2">Carrier Name: <span id="carrier-name"></span></li>
                                                            <li class="mb-2">Shipping Cost: <span id="shipping-cost"></span></li>
                                                            <li class="mb-2">Delay: <span id="is-delayed"></span></li>
                                                            <li class="mb-2">Returned: <span id="is-returned"></span></li>
                                                            <li class="mb-2">Insured: <span id="is-insured"></span></li>
                                                        </ul>

                                                        <!-- Address Details -->
                                                        <h6>Address</h6>
                                                        <ul>
                                                            <li class="mb-2">Address: <span id="address"></span></li>
                                                            <li class="mb-2">City: <span id="city"></span></li>
                                                            <li class="mb-2">State: <span id="state"></span></li>
                                                            <li class="mb-2">Zip Code: <span id="zipCode"></span></li>
                                                            <li class="mb-2">Country: <span id="country"></span></li>
                                                        </ul>

                                                        <!-- Package Details -->
                                                        <h6>Package</h6>
                                                        <ul>
                                                            <li class="mb-2">Name: <span id="package-name"></span></li>
                                                            <li class="mb-2">Description: <span id="description"></span></li>
                                                            <li class="mb-2">Weight: <span id="weight"></span></li>
                                                            <li class="mb-2">Amount: <span id="amount"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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


            <div class="card">

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="allTab">
                        <!-- BEGIN input-group -->
                        <div class="input-group mb-4">
                            <div class="flex-fill position-relative">
                                <div class="mb-3">
                                    <h4>Packages Information</h4>

                                </div>
                            </div>
                        </div>
                        <!-- END input-group -->

                        <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap small mb-4">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>Package Name</th>
                                        <th>Description</th>
                                        <th>Weight</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td class="align-middle">{{ $package->package_name }}</td>
                                            <td class="align-middle">{{ $package->description }}</td>
                                            <td class="align-middle">{{ $package->weight }} kg</td>
                                            <td class="align-middle">${{ number_format($package->amount, 2) }}</td>
                                            <td class="align-middle">
                                                <!-- Action buttons, adjust based on your requirements -->
                                                {{-- <a href="{{ route('packages.show', $package->id) }}"
                                                    class="btn btn-info btn-sm">View</a> --}}
                                                <a href="{{ route('packages.edit', $package->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('packages.destroy', $package->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
        <script src="{{ asset('admin-assets/js/getTrackingDetails.js') }}"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @endpush
@endsection
