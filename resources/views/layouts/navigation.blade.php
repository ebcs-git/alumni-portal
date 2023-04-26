     <!-- Topbar -->
     <nav class="navbar navbar-expand-lg topbar navbar-member" style="padding-left: 30px;">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" data-toggle="collapse" data-target="#navbarNav" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <div class="sidebar-brand-icon">
                <img src="{{asset('/image/logo/ebcs_logo.png')}}" rel="" style="height:32px;width:32px" alt="Image"></img>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav"style="padding-left: 30px;background:#050478;z-index:1;">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link nav-link-member" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link nav-link-member" href="{{url('/profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-member" href="{{url('/batch-list')}}">Batch List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-member" href="{{url('/announcements')}}">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-member" href="{{url('/alumni-services')}}">Alumni Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-member" href="{{url('/contact-us')}}">Contact Us</a>
                    </li>
                    </ul>
                </div>

           <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown"a ria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small" style="color:white;">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle"
                    src="{{asset('image/profile/user-nav.png')}}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{url('/settings')}}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

</ul>
    </nav>