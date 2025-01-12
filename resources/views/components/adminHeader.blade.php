<!-- BEGIN #header -->
<div id="header" class="app-header">
  <!-- BEGIN desktop-toggler -->
  <div class="desktop-toggler">
    <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
      <span class="bar"></span>
      <span class="bar"></span>
    </button>
  </div>
  <!-- END desktop-toggler -->
  
  <!-- BEGIN mobile-toggler -->
  <div class="mobile-toggler">
    <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
      <span class="bar"></span>
      <span class="bar"></span>
    </button>
  </div>
  <!-- END mobile-toggler -->
  
  <!-- BEGIN brand -->
  <div class="brand">
    <a href="index.html" class="brand-logo w-100">
      <iconify-icon icon="lets-icons:time-progress-duotone" class="fs-24px me-2 text-theme"></iconify-icon>
      <span class="brand-text fw-500 fs-14px">QUANTUM</span>
    </a>
  </div>
  <!-- END brand -->
  
  <!-- BEGIN menu -->
  <div class="menu">
    <div class="menu-item dropdown">
      <a href="#" class="menu-link menu-link-icon px-lg-3" data-bs-toggle="dropdown" data-bs-display="static">
        <iconify-icon icon="ph:globe-duotone" class="menu-icon me-lg-2"></iconify-icon> 
        <span class="d-lg-flex d-none">EN</span>
      </a>
      <div class="dropdown-menu fade dropdown-menu-end mt-1 fs-10px text-uppercase">
        <a href="#" class="dropdown-item d-flex align-items-center">English <span class="ms-auto fw-semibold text-white w-20px text-center">EN</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">Spanish <span class="ms-auto fw-semibold text-white w-20px text-center">ES</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">French <span class="ms-auto fw-semibold text-white w-20px text-center">FR</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">German <span class="ms-auto fw-semibold text-white w-20px text-center">DE</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">Italian <span class="ms-auto fw-semibold text-white w-20px text-center">IT</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">Japanese <span class="ms-auto fw-semibold text-white w-20px text-center">JA</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">Chinese <span class="ms-auto fw-semibold text-white w-20px text-center">ZH</span></a>
        <a href="#" class="dropdown-item d-flex align-items-center">Russian <span class="ms-auto fw-semibold text-white w-20px text-center">RU</span></a>
      </div>
    </div>
    <div class="menu-item dropdown dropdown-mobile-full">
      <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon">
        <iconify-icon icon="ph:warning-duotone" class="menu-icon"></iconify-icon>
      </a>
      <div class="dropdown-menu dropdown-menu-end fade w-300px p-0">
        <h6 class="dropdown-header fw-semibold py-2">NOTIFICATIONS</h6>
        <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
          <div>
            <div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
              <iconify-icon icon="material-symbols-light:mark-email-unread-outline-sharp"></iconify-icon>
            </div>
          </div>
          <div class="flex-1 ps-3 text-truncate">
            <div class="text-white fw-semibold">New email received</div>
            <div class="text-white text-opacity-75">You have a new email from John Doe.</div>
            <div class="text-white text-opacity-50 small">2 minutes ago</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
          <div>
            <div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
              <iconify-icon icon="material-symbols-light:calendar-clock-outline-sharp"></iconify-icon>
            </div>
          </div>
          <div class="flex-1 ps-3 text-truncate">
            <div class="text-white fw-semibold">Meeting reminder: Tomorrow at 9:00 AM</div>
            <div class="text-white text-opacity-75">Don't forget your meeting with the client.</div>
            <div class="text-white text-opacity-50 small">1 hour ago</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
          <div>
            <div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
              <iconify-icon icon="material-symbols-light:checklist"></iconify-icon>
            </div>
          </div>
          <div class="flex-1 ps-3 text-truncate">
            <div class="text-white fw-semibold">Task completed</div>
            <div class="text-white text-opacity-75">The task assigned to you has been completed.</div>
            <div class="text-white text-opacity-50 small">4 hours ago</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
          <div>
            <div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
              <iconify-icon icon="material-symbols-light:mark-unread-chat-alt-outline-sharp"></iconify-icon>
            </div>
          </div>
          <div class="flex-1 ps-3 text-truncate">
            <div class="text-white fw-semibold">New comment on your post</div>
            <div class="text-white text-opacity-75">Someone commented on your recent post.</div>
            <div class="text-white text-opacity-50 small">10 hours ago</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
          <div>
            <div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
              <iconify-icon icon="material-symbols-light:update"></iconify-icon>
            </div>
          </div>
          <div class="flex-1 ps-3 text-truncate">
            <div class="text-white fw-semibold">System update scheduled</div>
            <div class="text-white text-opacity-75">There will be a system update tomorrow.</div>
            <div class="text-white text-opacity-50 small">Yesterday at 6:00 PM</div>
          </div>
        </a>
        <a class="dropdown-item fs-10px text-center py-2 d-block" href="messenger.html">VIEW ALL</a>
      </div>
    </div>

    
    <div class="menu-item dropdown dropdown-mobile-full">
      <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link d-flex align-items-center">
        <div class="menu-img online me-sm-2 ms-lg-0 ms-n2">
          <img src="assets/img/user/profile.jpg" alt="Profile" class="" />
        </div>
        <div class="menu-text d-sm-block d-none">
          <span class="d-block"><span><span class="__cf_email__" data-cfemail="194c4a5c4b5758545c595e54585055375a5654">[email&#160;protected]</span></span></span>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-10px fade">
        <h6 class="dropdown-header">USER OPTIONS</h6>
        <a class="dropdown-item" href="settings.html">ACCOUNT SETTINGS</a>
        <a class="dropdown-item" href="page_login.html">LOG OUT</a>
      </div>
    </div>
  </div>
  <!-- END menu -->
  
</div>
<!-- END #header -->