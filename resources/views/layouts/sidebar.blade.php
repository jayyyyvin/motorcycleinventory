<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-0">
     
   <span class="fas fa-motorcycle fa-2x text-primary-300"> </span>
    </div>
    <div class="sidebar-brand-text mx-3" style="font-size: 18px;">Motorcycle Inventory <sup></sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">

    <span style="font-weight: normal; font-size: medium;">Dashboard</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('motorcycle') }}">

    <span style="font-weight: normal; font-size: medium;">Motorcycle</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('transaction') }}">

    <span style="font-weight: normal; font-size: medium;">Transaction</span></a>
  </li>




  @if (auth()->user()->role == 'Admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin') }}">

    <span style="font-weight: normal; font-size: medium;">Admin</span></a>
  </li>
  @endif
  
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">

    <span style="font-weight: normal; font-size: medium;">Profile</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>