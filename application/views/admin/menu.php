<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU AKSES</li>
  <li><a href="#"><i class="fa fa-home"></i> <span>Dasboard</span></a></li>
  <!-- <li><a href="#"><i class="fa fa-users"></i> <span>Data Karyawan</span></a></li> -->
  <!-- <li><a href="<?= base_url("data/apd/index"); ?>"><i class="fa fa-gears"></i> <span>Data APD</span></a></li> -->
  <li class="treeview">
    <a href="#"><i class="fa fa-gears"></i> <span>Data Karyawan</span>
      <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= base_url("data/karyawan/index"); ?>">Data Pribadi</a></li>
      <li><a href="#">Data </a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-gears"></i> <span>Data APD</span>
      <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= base_url("data/apd/index"); ?>">Data Pengambilan APD</a></li>
      <li><a href="#">Data Stok APD</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-file"></i> <span>Master Data</span>
      <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= base_url("master/area/index"); ?>">Area Kerja</a></li>
      <li><a href="<?= base_url("master/jabatan/index"); ?>">Jabatan</a></li>
      <li><a href="<?= base_url("master/lisensi/index"); ?>">Lisensi</a></li>
      <li><a href="<?= base_url("master/roster-kerja/index"); ?>">Roster Kerja</a></li>
      <li><a href="<?= base_url("master/kategori-dokumen/index"); ?>">Kategori Dokumen</a></li>
      <li><a href="<?= base_url("master/suku/index"); ?>">Suku</a></li>
      <li><a href="<?= base_url("master/agama/index"); ?>">Agama</a></li>
      <li><a href="<?= base_url("master/bank/index"); ?>">Bank</a></li>
    </ul>
  </li>
</ul>