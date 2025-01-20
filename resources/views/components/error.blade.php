<div class="toasts-container">
    @if ($errors->any())
        <div class="toast fade show mb-3" data-autohide="false">
            <div class="toast-header">
                <i class="far fa-bell text-muted me-2"></i>
                <strong class="me-auto">Error</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

        @if (session('success'))
        <div class="toast fade show mb-3" data-autohide="false">
            <div class="toast-header">
                <i class="far fa-bell text-muted me-2"></i>
                <strong class="me-auto">Success!!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast fade show mb-3" data-autohide="false">
            <div class="toast-header">
                <i class="far fa-bell text-muted me-2"></i>
                <strong class="me-auto">Error</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
    @endif
</div>

