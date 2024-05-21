<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.ntechbangla.com/" target="_blank" class="brand-link">
      <img src="{{ asset('images/default/icon.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">nTechBangla</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ URL::to('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('manage-slider') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Manage Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('manage-message') }}" class="nav-link">
              <i class="fas fa-sms"></i>
              <p>
                Manage Message
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('manage-links') }}" class="nav-link">
              <i class="fas fa-link"></i>
              <p>
                Manage Links
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('manage-panel-box') }}" class="nav-link">
              <i class="fas fa-box"></i>
              <p>
                Panel Box
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('photo-category*')) ? 'active': '' }} {{ (request()->is('photo-gallery*')) ? 'active': '' }} {{ (request()->is('video-gallery*')) ? 'active': '' }} ">
            <i class="far fa-folder"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('photo-gallery.index') }}" class="nav-link {{ (request()->is('photo-gallery*')) ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('photo-category.index') }}" class="nav-link {{ (request()->is('photo-category*')) ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('video-gallery.index') }}" class="nav-link {{ (request()->is('video-gallery*')) ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user-cog"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::to('primary-info') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Primary Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Setting</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
