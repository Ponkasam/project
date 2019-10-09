<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/student') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/student') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าหลัก</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        จัดการข้อมูล
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/reserve') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>จองรายวิชา</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/reserve/show') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>รายวิชาที่จอง</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/suggestion') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>ข้อเสนอแนะ</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('logout') }}">
          <i class="fas fa-arrow-right"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li>
    </ul>
    <!-- End of Sidebar -->