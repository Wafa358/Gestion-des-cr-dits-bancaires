  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <span class="brand-text font-weight-light">User</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="{{route('profile.edit') }}" class="d-block">Wafa Hajji</a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="route{{('credit')}}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Crédit 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{('credit')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liste</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/sliders.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Historique</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('employes') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Employés 
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('agence') }}"  class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Agence 
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('client') }}"  class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                 Client 
                  </p>
                </a>
              </li>

            <li class="nav-item">
              <a href="{{ route('role') }}" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Privilèges 
                 
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('roles.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Role</p>
                  </a>
                </li>
              </ul>
            </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>