  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Skill Set</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Malik Sagheer</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard -->
            <li class="nav-item">
              <a href="{{route('admin.dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!-- Courses -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Courses
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-eye nav-icon"></i>
                    <p>View Courses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Add Lecture</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-folder-plus nav-icon"></i>
                    <p>Add Section</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-video nav-icon"></i>
                    <p>Add Free Lecture</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-eye nav-icon"></i>
                    <p>View Free Lecture</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-ellipsis-h nav-icon"></i>
                    <p>Others</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Students -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Students
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.students')}}" class="nav-link">
                    <i class="fas fa-user-graduate nav-icon"></i>
                    <p>All Students</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-circle nav-icon"></i>
                    <p>Google Students</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-tie nav-icon"></i>
                    <p>Pro Students</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Student Payments -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-money-check-alt"></i>
                <p>Students Payments</p>
              </a>
            </li>

            <!-- Categories -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>Categories</p>
              </a>
            </li>

            <!-- Tags -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
                <p>Tags</p>
              </a>
            </li>

            <!-- Authors -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>Authors</p>
              </a>
            </li>

            <!-- Blog Posts -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-blog"></i>
                <p>Blog Posts</p>
              </a>
            </li>

            <!-- Agents -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-secret"></i>
                <p>Agents</p>
              </a>
            </li>

            <!-- Pages -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Pages</p>
              </a>
            </li>

            <!-- Coupon -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-percentage"></i>
                <p>Coupon</p>
              </a>
            </li>

            <!-- Media -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>Media</p>
              </a>
            </li>

            <!-- Communications -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Communications
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-paper-plane nav-icon"></i>
                    <p>Send Messages</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-inbox nav-icon"></i>
                    <p>View Messages</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <p>Settings</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Staff Members -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>Staff Members</p>
              </a>
            </li>

            <!-- Slider Images -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
                <p>Slider Images</p>
              </a>
            </li>

            <!-- View Reports -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>View Reports</p>
              </a>
            </li>

            <!-- Testimonials -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comment-dots"></i>
                <p>Testimonials</p>
              </a>
            </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
