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
                
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="allTab">
                        

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
                                    @foreach ($clients as $client)
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
