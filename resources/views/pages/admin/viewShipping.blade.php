@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        'title' => $title,
    ])

    @include('components.adminSidebar')

    <div id="content" class="app-content">
        <div class="container">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="allTab">   
                        <!-- BEGIN input-group -->
                        <div class="input-group mb-5">
                            <form method="GET" action="{{ route('clients.index') }}" class="w-100">
                                <div class="input-group">
                                    <input type="text" 
                                           name="search" 
                                           class="form-control ps-35px" 
                                           placeholder="Search clients..." 
                                           value="{{ request()->query('search') }}">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    @if(request()->filled('search'))
                                        <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">
                                            Clear
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <!-- END input-group -->                     
                       <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap small mb-4">
                                <thead>
                                    <tr class="text-uppercase">
                                        {{-- <th></th> --}}
                                        <th>Reciever Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip Code</th>
                                        <th>Country</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @include('partials.client-rows', ['clients' => $clients])
                                </tbody>
                            </table>
                        </div>
                        <!-- END table -->

                        <div class="d-md-flex align-items-center">
                            <div class="me-md-auto text-md-left text-center mb-2 mt-5 mb-md-0 results-info">
                                @include('partials.results-info', ['clients' => $clients])
                            </div>
                            <ul class="pagination mb-0 justify-content-center">
                                {{ $clients->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('admin-assets/js/wizard.js') }}"></script>
        <script src="{{ asset('js/admin/clients-search.js') }}"></script>
    @endpush
@endsection
