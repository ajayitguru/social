<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://naukrirecruiter.naukri.com//profilePic/getpic?pid=1579002852rp4414046_small4" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php  echo Auth::User()->name; ?></span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                User Manager
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('userbalance.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Balances</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                      Leauge Manager
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('challengecategory.index')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Leauge Category</p>
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('userbalance.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>User Balances</p>
                      </a>
                    </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>