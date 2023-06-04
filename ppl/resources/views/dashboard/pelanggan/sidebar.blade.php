{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/myorder') ? 'active' : '' }}" href="/dashboard/myorder">
            <span data-feather="file"></span>
            Pesanan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="shopping-cart"></span>
            Kerangjang
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="clipboard"></span>
            Riwayat Pembelian
          </a>
        </li>
      </ul>
      </ul>
    </div>
</nav> --}}

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" /dashboard">
      <h3 class="ms-1 font-weight-bold">KOPIN</h3>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/myorder') ? 'active' : '' }}" href="/dashboard/myorder">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Pesanan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/billing.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Billing</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/virtual-reality.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Virtual Reality</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/rtl.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">RTL</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../pages/profile.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>
    </ul>
  </div>
</aside>