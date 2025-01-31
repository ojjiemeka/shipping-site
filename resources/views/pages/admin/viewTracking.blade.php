@extends('layouts.admin')

@section('content')
    @include('components.loader')

    @include('components.adminHeader', [
        // 'title' => $title,
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
                                        <th>@lang('tracking.columns.client')</th>
                                        <th>@lang('tracking.columns.tracking')</th>
                                        <th>@lang('tracking.columns.package')</th>
                                        <th>@lang('tracking.columns.status')</th>
                                        <th>@lang('tracking.columns.shipping')</th>
                                        <th>@lang('tracking.columns.actions')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($trackings as $tracking)
                                        <tr>
                                            <td>
                                                {{ optional($tracking->address->client)->fullName ?? 'N/A' }}
                                            </td>
                                            <td>{{ $tracking->tracking_number }}</td>
                                            <td>{{ $tracking->package->package_name ?? 'N/A' }}</td>
                                            <td>@include('partials.status-badge', ['status' => $tracking->package_status])</td>
                                            <td class="text-uppercase">{{ $tracking->shipping_method ?? 'N/A' }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <!-- View Button -->
                                                    <button type="button" 
                                                            class="btn btn-info btn-sm view-tracking" 
                                                            data-tracking-id="{{ $tracking->id }}">
                                                        <i class="fas fa-eye"></i> View
                                                    </button>

                                                    <!-- Edit Button -->
                                                    <a href="{{ route('trackings.edit', $tracking->id) }}" 
                                                       class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <!-- Delete Button -->
                                                    <form action="{{ route('trackings.destroy', $tracking->id) }}" 
                                                          method="POST"
                                                          class="d-inline"
                                                          data-tracking-count="{{ $tracking->package ? 1 : 0 }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                class="btn btn-sm btn-danger px-3 delete-tracking">
                                                            <i class="fas fa-trash fa-fw"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4">
                                                <div class="text-muted">No tracking records found</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                    @include('partials.tracking-modal')

                                </tbody>
                            </table>

                        </div>
                        <!-- END table -->

                        @if($trackings->hasPages())
                            <div class="d-flex justify-content-end mt-4">
                                {{ $trackings->onEachSide(1)->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>


            <div class="card mt-5">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="packagesTab">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="card-title mb-0">Packages Information</h4>
                            <div class="flex-fill position-relative ms-3" style="max-width: 400px;">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search packages..." 
                                           id="packageSearch" aria-label="Package search">
                                    <button class="btn btn-outline-secondary" type="button" id="packageSearchBtn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-packages table-hover align-middle mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="sortable" data-sort="package_name">Name</th>
                                            <th class="sortable" data-sort="description">Description</th>
                                            <th class="sortable text-end" data-sort="weight">Weight</th>
                                            <th class="sortable text-end" data-sort="amount">Amount</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packages as $package)
                                        <tr class="hover-shadow">
                                            <td class="text-nowrap">{{ Str::limit($package->package_name, 25) }}</td>
                                            <td>{{ Str::limit($package->description, 40) }}</td>
                                            <td class="text-end">{{ number_format($package->weight) }} kg</td>
                                            <td class="text-end">${{ number_format($package->amount, 2) }}</td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2 justify-content-center">
                                                    <a href="{{ route('packages.edit', $package->id) }}" 
                                                       class="btn btn-sm btn-warning px-3 py-1">
                                                       <i class="fas fa-edit fa-fw"></i>
                                                    </a>
                                                    <form action="{{ route('packages.destroy', $package->id) }}" 
                                                          method="POST"
                                                          data-tracking-count="{{ $package->trackings()->count() }}"
                                                          class="delete-package">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                class="btn btn-sm btn-danger px-3 py-1 delete-package">
                                                            <i class="fas fa-trash fa-fw"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @if($packages->hasPages())
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="text-muted">
                                    Showing {{ $packages->firstItem() }} to {{ $packages->lastItem() }} of {{ $packages->total() }} entries
                                </div>
                                <div class="d-flex justify-content-end">
                                    {{ $packages->onEachSide(1)->links() }}
                                </div>
                            </div>
                            @endif
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
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = new bootstrap.Modal(document.getElementById('trackingModal'));
            
            document.querySelectorAll('.view-tracking').forEach(button => {
                button.addEventListener('click', function() {
                    const trackingId = this.dataset.trackingId;
                    console.log('Button clicked, tracking ID:', trackingId);
                    
                    fetch(`/trackings/${trackingId}`)
                        .then(response => {
                            console.log('Response status:', response.status);
                            if (!response.ok) {
                                console.error('HTTP error:', response.status);
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                            console.log('API Response:', data);
                            
                            // Validate response structure
                            if (!data.tracking || !data.tracking.address || !data.tracking.package) {
                                console.error('Invalid response structure:', data);
                                throw new Error('Invalid response format');
                            }
                            
                            // Clear previous data
                            document.querySelectorAll('.modal-body span').forEach(span => span.textContent = '');
                            
                            // Populate Tracking Details
                            document.getElementById('tracking-number').textContent = data.tracking.tracking_number;
                            document.getElementById('package-status').innerHTML = data.statusBadge; // Use innerHTML
                            
                            // Handle empty values
                            const setValue = (id, value) => {
                                const element = document.getElementById(id);
                                if (element) element.textContent = value || 'N/A';
                            };

                            // Tracking Details
                            setValue('shipping-method', data.tracking.shipping_method);
                            setValue('ship-date', data.tracking.ship_date);
                            setValue('delivery-date', data.tracking.delivery_date);
                            setValue('current-location', data.tracking.current_location);
                            setValue('carrier-name', data.tracking.carrier_name);
                            setValue('shipping-cost', `$${data.tracking.shipping_cost}`);

                            // For Delay
                            const delayStatus = data.tracking.is_delayed ? 'Yes' : 'No';
                            const delayClass = data.tracking.is_delayed ? 'text-lime-400' : 'text-danger-400';
                            document.getElementById('is-delayed').innerHTML = `<span class="${delayClass}">${delayStatus}</span>`;

                            // For Returned
                            const returnedStatus = data.tracking.is_returned ? 'Yes' : 'No';
                            const returnedClass = data.tracking.is_returned ? 'text-lime-400' : 'text-danger-400';
                            document.getElementById('is-returned').innerHTML = `<span class="${returnedClass}">${returnedStatus}</span>`;

                            // For Insured
                            const insuredStatus = data.tracking.is_insured ? 'Yes' : 'No';
                            const insuredClass = data.tracking.is_insured ? 'text-lime-400' : 'text-danger-400';
                            document.getElementById('is-insured').innerHTML = `<span class="${insuredClass}">${insuredStatus}</span>`;

                            // Address Details
                            setValue('address', data.tracking.address.address);
                            setValue('city', data.tracking.address.city);
                            setValue('state', data.tracking.address.state);
                            setValue('zipCode', data.tracking.address.zipCode);
                            setValue('country', data.tracking.address.country);

                            // Package Details
                            setValue('package-name', data.tracking.package.package_name);
                            setValue('description', data.tracking.package.description);
                            setValue('weight', `${data.tracking.package.weight} kg`);
                            setValue('amount', `$${data.tracking.package.amount}`);

                            modal.show();
                            document.body.classList.add('modal-open');
                            document.body.style.overflow = 'hidden';
                            document.body.style.paddingRight = '0';

                            // Handle modal hidden event
                            document.getElementById('trackingModal').addEventListener('hidden.bs.modal', function () {
                                document.body.classList.remove('modal-open');
                                document.body.style.overflow = '';
                                document.body.style.paddingRight = '';
                                document.querySelector('.modal-backdrop').remove();
                            });
                        })
                        .catch(error => {
                            console.error('Error during fetch:', error);
                            alert(`Error: ${error.message}`);
                        });
                });
            });
        });
        </script>
    @endpush

    @push('scripts')
    <script>
    document.addEventListener('click', function(event) {
        // Handle package deletions
        if (event.target.closest('.delete-package')) {
            event.preventDefault();
            const form = event.target.closest('form');
            const trackingCount = parseInt(form.dataset.trackingCount) || 0;
            
            Swal.fire({
                title: 'Delete Package?',
                html: trackingCount > 0 
                    ? `Package has ${trackingCount} tracking records.<br><strong>Delete anyway?</strong>`
                    : 'This will permanently delete the package.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                result.isConfirmed && form.submit();
            });
        }

        // Handle tracking deletions
        if (event.target.closest('.delete-tracking')) {
            event.preventDefault();
            const form = event.target.closest('form');
            const packageCount = parseInt(form.dataset.trackingCount) || 0;

            Swal.fire({
                title: 'Delete Tracking Record?',
                html: packageCount > 0 
                    ? `This tracking info is linked to an address and a package.<br><strong>Delete anyway?</strong>`
                    : 'This will permanently delete the tracking record.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                result.isConfirmed && form.submit();
            });
        }
    });
    </script>
    @endpush

    @push('scripts')
    <script>
    document.querySelector('.delete-tracking').addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Delete tracking clicked');
        Swal.fire('Test');
    });
    </script>
    @endpush

@endsection
