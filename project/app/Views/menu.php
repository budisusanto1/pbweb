<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>

      <?php if (session()->get('level') == 1) { ?>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-server"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="barang2">
              <i class="bi bi-circle"></i><span>Barang</span>
            </a>
          </li>
          <!-- <li>
            <a href="user1">
              <i class="bi bi-circle"></i><span>user</span>
            </a>
          </li> -->
          <li>
            <a href="pesanan2">
              <i class="bi bi-circle"></i><span>pesanan</span>
            </a>
          </li>
          </li> 
          <li>
            <a href="karyawan1">
              <i class="bi bi-circle"></i><span>karyawan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <?php } ?>

      <?php if (session()->get('level') == 1 || session()->get('level') == 2) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="lp">
              <i class="bi bi-circle"></i><span>Laporan pesanan</span>
            </a>
          </li>
          <li>
            <a href="ln">
              <i class="bi bi-circle"></i><span>Laporan nota</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <?php } ?>

     <?php if (session()->get('level') == 1 || session()->get('level') == 3) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-dash-fill"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="nota2">
              <i class="bi bi-circle"></i><span>nota</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      <?php } ?>
      <li class="nav-heading">Halaman</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout">
          <i class="bi bi-door-open-fill"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Blank Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->




<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      
      
      <?php if (session()->get('level') == 1) { ?>
      </li>
      <li class="nav-item">
      <li class="nav-item">
          <a class="nav-link" href="dashboard">
            <i class="fas fa-house-user"></i>
          Home</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <i class="fas fa-project-diagram"></i>
          Data Master</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="barang">Barang</a></li>
              <li><a class="dropdown-item" href="karyawan">Karyawan</a></li>
              <li><a class="dropdown-item" href="reset">Reset Password</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <i class="fas fa-scroll"></i>
          Laporan</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="lbm">Barang Masuk</a></li>
              <li><a class="dropdown-item" href="lbk">Barang Keluar</a></li>
              <li><a class="dropdown-item" href="lbr">Barang Rusak</a></li>
              <li><a class="dropdown-item" href="lb">Barang</a></li>
          </ul>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-wallet"></i>
          Transaksi</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="barangmasuk">Barang Masuk</a></li>
              <li><a class="dropdown-item" href="barangkeluar">Barang Keluar</a></li>
          </ul>
      </li> 
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-table"></i>
          Penerimaan</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="barangmasuk">Barang Masuk</a></li>
              <li><a class="dropdown-item" href="barangrusak">Barang Rusak</a></li>
          </ul>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="barangkeluar">
            <i class="fas fa-truck"></i>
          Barang Keluar</a>
      </li>
      <li class="nav-item">
      <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
      </li>
      <?php } ?>

      
      <?php if (session()->get('level') == 2) { ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="lbm">Barang Masuk</a></li>
              <li><a class="dropdown-item" href="lbk">Barang Keluar</a></li>
              <li><a class="dropdown-item" href="lb">Barang</a></li>
          </ul>
      <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
      </li>
      <?php } ?>

      
      <?php if (session()->get('level') == 3) { ?>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Transaksi</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="barangmasuk">Barang Masuk</a></li>
              <li><a class="dropdown-item" href="barangkeluar">Barang Keluar</a></li>
          </ul>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
      </li>
      <?php } ?>

      
      <?php if (session()->get('level') == 4) { ?>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Penerimaan</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="barangmasuk">Barang Masuk</a></li>
              <li><a class="dropdown-item" href="barangrusak">Barang Rusak</a></li>
          </ul>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
      </li>
      <?php } ?>

      
      <?php if (session()->get('level') == 5) { ?>
      <li class="nav-item">
          <a class="nav-link" href="barangkeluar">Barang Keluar</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
      </li>
      <?php } ?>

    </ul>
  </div>
</nav>
 -->