<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url("index3.html") }}" class="brand-link">
    <img src="{{ asset("/admin/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kumpulin.AppsV1</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("/admin/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @if(Auth::check())
        <span class="hidden-xs">{{ Auth::user()->name}}</span>
        @endif
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2"> 
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-close">
          <a href="{{ url("#") }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Produk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="fas fa-seedling nav-icon"></i>
                <p>Organik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="fas fa-file nav-icon"></i>
                <p>Kertas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="fas fa-spray-can nav-icon"></i>
                <p>Plastik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="fas fa-tv nav-icon"></i>
                <p>Barang Elektronik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="fas fa-wine-glass nav-icon"></i>
                <p>Kaca</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu-close">
          <a href="{{ url("#") }}" class="nav-link">
            <i class="nav-icon fas fa-dollar-sign"></i>
            <p>
              Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('pesanan.index') }}" class="nav-link">
                <i class="fas fa-box-tissue nav-icon"></i>
                <p>Pesanan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url("./index2.html") }}" class="nav-link">
                <i class="fas fa-shipping-fast nav-icon"></i>
                <p>Berjalan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url("./index2.html") }}" class="nav-link">
                <i class="fas fa-check-circle nav-icon"></i>
                <p>Selesai</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu-close">
          <a href="{{ url("#") }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              People
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('nasabah.index') }}" class="nav-link">
                <i class="fas fa-child nav-icon"></i>
                <p>Nasabah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('pengemudi.index') }}" class="nav-link">
                <i class="fas fa-chalkboard-teacher nav-icon"></i>
                <p>Pengemudi</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu-close">
          <a href="{{ url("#") }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user.create') }}" class="nav-link">
                <i class="fas fa-user-plus nav-icon"></i>
                <p>Create User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.index')}}" class="nav-link">
                <i class="far fa-address-card nav-icon"></i>
                <p>All User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url("./index2.html") }}" class="nav-link">
                <i class="fa fa-key nav-icon"></i>
                <p>Roles & Permission</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu-close">
          <a href="{{ url("#") }}" class="nav-link">
            <i class="fas fa-file-invoice	 nav-icon"></i>
            <p>
              Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('reportuser.index') }}" class="nav-link">
                <i class="fas fa-address-book nav-icon"></i>
                <p>Report User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('reportnasabah.index') }}" class="nav-link">
                <i class="fas fa-universal-access	 nav-icon"></i>
                <p>Report Nasabah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('reportpengemudi.index') }}" class="nav-link">
                <i class="fas fa-headphones	nav-icon"></i>
                <p>Report Pengemudi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('reportproduk.index') }}" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Report Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('reportpesanan.index') }}" class="nav-link">
                <i class="fas fa-file nav-icon"></i>
                <p>Report Pesanan</p>
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