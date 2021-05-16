<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">ForClass</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">fC</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('dashboard') }}">General Dashboard</a></li>
              {{-- <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li> --}}
            </ul>
          </li>

          <li class="{{ request()->is('admin/users-management*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users-cog"></i> <span>Users Management</span></a>
          </li>

          <li class="{{ request()->is('admin/students*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.students.index') }}"><i class="fas fa-users"></i> <span>Students</span></a>
          </li>

          <li class="menu-header">Subjects & Schedules</li>

          <li class="{{ request()->is('admin/subjects*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.subjects.index') }}"><i class="fas fa-book"></i> <span>Subjects</span></a>
          </li>
          <li class="{{ request()->is('admin/schedules*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.subjects.index') }}"><i class="fas fa-list"></i> <span>Schedules</span></a>
          </li>

          <li class="menu-header">Starter</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
            <ul class="dropdown-menu">
              <li class="active"><a class="nav-link" href="layout-default.html">Default Layout</a></li>
              <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
              <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
          </li>
          <li class="menu-header">Pages</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="errors-503.html">503</a></li>
              <li><a class="nav-link" href="errors-403.html">403</a></li>
              <li><a class="nav-link" href="errors-404.html">404</a></li>
              <li><a class="nav-link" href="errors-500.html">500</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>