<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">APP INTERFACE</div>
            <div class="menu-item ">
                <a href="{{route('dashboard')}}" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:rocket-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">DASHBOARD</span>
                </a>
            </div>
            <div class="menu-item ">
                <a href="analytics.html" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:chart-bar-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">ANALYTICS</span>
                </a>
            </div>
            <div class="menu-item has-sub ">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text text-uppercase">Email</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item ">
                        <a href="email_inbox.html" class="menu-link">
                            <span class="menu-text">INBOX</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="email_compose.html" class="menu-link">
                            <span class="menu-text">COMPOSE</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="email_detail.html" class="menu-link">
                            <span class="menu-text">DETAIL</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub ">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text text-uppercase">Reciever</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu text-uppercase">
                    <div class="menu-item ">
                        <a href="{{route('clients.index')}}" class="menu-link">
                            <span class="menu-text">View All Info</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('clients.create')}}" class="menu-link">
                            <span class="menu-text">Add User & Address</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub text-uppercase">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text text-uppercase">Tracking & Packages</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item ">
                        <a href="{{route('trackings.index')}}" class="menu-link">
                            <span class="menu-text">View All Info</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('packages.create')}}" class="menu-link">
                            <span class="menu-text">Create New Package</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('trackings.create')}}" class="menu-link">
                            <span class="menu-text">Create Tracking Information</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="menu-item has-sub text-uppercase">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text text-uppercase">Packages</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item ">
                        <a href="{{route('trackings.index')}}" class="menu-link">
                            <span class="menu-text">View</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('trackings.create')}}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                </div>
            </div> --}}

            <div class="menu-header">USER PORTAL</div>

            <div class="menu-item ">
                <a href="profile.html" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:user-focus-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">PROFILE</span>
                </a>
            </div>
            <div class="menu-item ">
                <a href="settings.html" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:gear-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">SETTINGS</span>
                </a>
            </div>
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<!-- END #sidebar -->