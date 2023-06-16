<aside class="main-sidebar sidebar-dark-blue elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-dark">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/angie.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Suarez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/SkylAb-158/Psychology/psychology/" class="nav-link <?php if($routesArray[4]==""): ?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/SkylAb-158/Psychology/psychology/users" class="nav-link <?php if($routesArray[4]=="users"): ?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/SkylAb-158/Psychology/psychology/clinicHistory" class="nav-link <?php if($routesArray[4]=="clinicHistory"): ?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Clinic History
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/SkylAb-158/Psychology/psychology/interviews" class="nav-link <?php if($routesArray[4]=="interviews"): ?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Interviews
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/SkylAb-158/Psychology/psychology/psychologists" class="nav-link <?php if($routesArray[4]=="psychologists"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-user"></i>
                    <p>
                        Psychologists
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/SkylAb-158/Psychology/psychology/treatment" class="nav-link <?php if($routesArray[4]=="treatment"): ?> active <?php endif ?>">
                <i class="far nav-icon fa-regular fa-heart"></i>
                    <p>
                        Treatment
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Mailbox
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../mailbox/mailbox.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inbox</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../mailbox/compose.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Compose</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../mailbox/read-mail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Read</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>