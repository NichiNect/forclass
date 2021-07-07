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
          
          <li class="menu-header">users & Students Management</li>

          <li class="{{ request()->is('admin/users-management*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users-cog"></i> <span>Users Management</span></a>
          </li>

          <li class="{{ request()->is('admin/students*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.students.index') }}"><i class="fas fa-users"></i> <span>Students</span></a>
          </li>

          <li class="menu-header">Subjects & Pickets Schedules</li>
          
          <li class="{{ request()->is('admin/subjects*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.subjects.index') }}"><i class="fas fa-book"></i> <span>Subjects</span></a>
          </li>
          <li class="{{ request()->is('admin/schedules*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.schedules.index') }}"><i class="fas fa-calendar-alt"></i> <span>Subjects Schedules</span></a>
          </li>
          <li class="{{ request()->is('admin/pickets*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.pickets.index') }}"><i class="fas fa-calendar-check"></i> <span>Pickets Schedules</span></a>
          </li>
          
          <li class="menu-header">Articles</li>

          <li class="{{ request()->is('admin/articles*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.articles.index') }}"><i class="fas fa-file-alt"></i> <span>Articles</span></a>
          </li>
          
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
    </aside>
  </div>