<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ url('adminlte/dist/img/favicon.png')}}" alt="Architoi Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Architoi</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

  <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('professional.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Utilisateurs
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('projets') }}" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
            <p>
              Projets
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('profession.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Professions
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('category.index') }}" class="nav-link">
            <i class="nav-icon fa-solid fa-city"></i>
            <p>
              Categories
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
