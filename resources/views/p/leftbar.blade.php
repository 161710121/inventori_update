<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h4><p>{{ Auth::user()->name }}</p></h4>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('barang.index') }}"><i class="fa fa-circle-o"></i> Barang</a></li>
            <li><a href="{{ route('ruangan.index') }}"><i class="fa fa-circle-o"></i> Ruangan</a></li>
            <li><a href="{{ route('kategori.index') }}"><i class="fa fa-circle-o"></i> Kategori</a></li>
            <li><a href="{{ route('ruangjns.index') }}"><i class="fa fa-circle-o"></i> Jenis Ruangan</a></li>
            <li><a href="{{ route('kampus.index') }}"><i class="fa fa-circle-o"></i> Kampus</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Expedisi</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tanda Terima</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Barang Rusak</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Laporan</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
