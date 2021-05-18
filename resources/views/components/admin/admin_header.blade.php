<div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
			<ul class="navbar-nav mr-3">
				<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
				<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
			</ul>
			<div class="search-element">
				<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
				<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				<div class="search-backdrop"></div>
				<div class="search-result">
				<div class="search-header">
					Histories
				</div>
				<div class="search-item">
					<a href="#">How to hack NASA using CSS</a>
					<a href="#" class="search-close"><i class="fas fa-times"></i></a>
				</div>
				</div>
			</div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/stisla/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Yoni Widhi</div></a>
            <div class="dropdown-menu dropdown-menu-right">
				<div class="dropdown-title">Logged in 5 min ago</div>
				<a href="features-profile.html" class="dropdown-item has-icon">
					<i class="far fa-user"></i> Profile
				</a>
				<a href="features-activities.html" class="dropdown-item has-icon">
					<i class="fas fa-bolt"></i> Activities
				</a>
				<a href="features-settings.html" class="dropdown-item has-icon">
					<i class="fas fa-cog"></i> Settings
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logoutModal">
						Logout>
					<i class="fas fa-sign-out-alt"></i>
				</a>
				{{-- <a href="#" class="dropdown-item has-icon text-danger" 
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();" data-toggle="modal" data-target="#logoutModal">
						Logout>
					<i class="fas fa-sign-out-alt"></i>
				</a> --}}
				{{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form> --}}
            </div>
          </li>
        </ul>
	</nav>
	
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>