<nav class="sidebar sidebar-offcanvas bg-light position-fixed" id="sidebar" style="top: 70px; left: 0; width: 250px; height: 100vh; z-index: 1000;">
  <div class="nav-item">
    <a class="nav-link text-dark" href="/admin">
      <i class="icon-grid menu-icon text-dark"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </div>

  <div class="nav-item">
    <a class="nav-link text-dark" href="{{ route('packages.index') }}">
      <i class="icon-paper menu-icon text-dark"></i>
      <span class="menu-title">Packages</span>
    </a>
  </div>

  <div class="nav-item">
    <a class="nav-link text-dark" href="{{ route('tests.index') }}">
      <i class="icon-columns menu-icon text-dark"></i>
      <span class="menu-title">Test</span>
    </a>
  </div>

  <div class="nav-item">
    <a class="nav-link text-dark" href="{{ route('appointments.index') }}">
      <i class="icon-bar-graph menu-icon text-dark"></i>
      <span class="menu-title">Appointment Request</span>
    </a>
  </div>

  <div class="nav-item">
    <a class="nav-link text-dark" href="{{ route('exam-requests.index') }}">
      <i class="icon-grid-2 menu-icon text-dark"></i>
      <span class="menu-title">exam-requests</span>
    </a>
  </div>

 
</nav>
