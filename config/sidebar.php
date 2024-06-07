<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color: #E88D67" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3" style="color: #005C78">Perbaikan Ponsel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Beranda -->
    <li class="nav-item <?= isset($home) ? 'active' : ''; ?>">
        <a class="nav-link" href="?#">
            <i class="fas fa-fw fa-home" style="color: #005C78"></i>
            <span style="color: #005C78">Dasboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color: #F3F7EC">
        Menu
    </div>
    <?php if (isset($_SESSION['role'])): ?>
        <!-- Nav Item - Pages Collapse Menu -->

        <?php if ($_SESSION['role'] == 'admin'): ?>
            <li class="nav-item <?= isset($master) ? 'active' : ''; ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true"
                    aria-controls="master">
                    <i class="fas fa-fw fa-folder" style="color: #005C78"></i>
                    <span style="color: #005C78">Master</span>
                </a>
                <div id="master" class="collapse <?= isset($master) ? 'show' : ''; ?>" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= isset($kasir) ? 'active' : ''; ?>" style="color: #E88D67" href="?kasir">Kasir</a>
                        <a class="collapse-item <?= isset($barang) ? 'active' : ''; ?>" style="color: #E88D67" href="?barang">Barang</a>
                        <a class="collapse-item <?= isset($jenis_kerusakan) ? 'active' : ''; ?>" style="color: #E88D67" href="?jenis_kerusakan">Jenis
                            Kerusakan</a>
                    </div>
                </div>
            </li>
        <?php endif; ?>

        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'kasir'): ?>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= isset($transaksi) ? 'active' : ''; ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi" aria-expanded="true"
                    aria-controls="transaksi">
                    <i class="fas fa-fw fa-folder" style="color: #005C78"></i>
                    <span style="color: #005C78">Transaksi</span>
                </a>
                <div id="transaksi" class="collapse <?= isset($transaksi) ? 'show' : ''; ?>" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= isset($penjualan) ? 'active' : ''; ?>" style="color: #E88D67" href="?penjualan">Penjualan</a>
                        <a class="collapse-item <?= isset($perbaikan) ? 'active' : ''; ?>" style="color: #E88D67" href="?perbaikan">Reparasi</a>
                        <a class="collapse-item <?= isset($pengeluaran) ? 'active' : ''; ?>" style="color: #E88D67" href="?pengeluaran">Pengeluaran</a>
                    </div>
                </div>
        </li>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->