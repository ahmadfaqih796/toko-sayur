<?php
$id = $_SESSION['admin']['id_member'];
$hasil_profil = $lihat->member_edit($id);

// Define sidebar menu items
$sidebarMenu = [
    [
        'text' => 'Dashboard',
        'icon' => 'fas fa-fw fa-tachometer-alt',
        'link' => 'index.php',
    ],
    [
        'text' => 'Data Master',
        'icon' => 'fas fa-fw fa-database',
        'children' => [
            ['text' => 'Barang', 'link' => 'index.php?page=barang'],
            ['text' => 'Kategori', 'link' => 'index.php?page=kategori'],
        ],
    ],
    [
        'text' => 'Transaksi',
        'icon' => 'fas fa-fw fa-desktop',
        'children' => [
            ['text' => 'Transaksi Jual', 'link' => 'index.php?page=jual'],
            ['text' => 'Laporan Penjualan', 'link' => 'index.php?page=laporan'],
        ],
    ],
    [
        'text' => 'Pengaturan Toko',
        'icon' => 'fas fa-fw fa-cogs',
        'link' => 'index.php?page=pengaturan',
    ],
];
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-leaf"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Sayur<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Loop through sidebar menu items -->
    <?php foreach ($sidebarMenu as $menuItem) : ?>
        <?php if (isset($menuItem['children'])) : ?>
            <!-- Nav Item - Parent Menu with Children -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?= str_replace(' ', '', $menuItem['text']) ?>" aria-expanded="true" aria-controls="collapse<?= str_replace(' ', '', $menuItem['text']) ?>">
                    <i class="<?= $menuItem['icon'] ?>"></i>
                    <span><?= $menuItem['text'] ?></span>
                </a>
                <div id="collapse<?= str_replace(' ', '', $menuItem['text']) ?>" class="collapse" aria-labelledby="heading<?= str_replace(' ', '', $menuItem['text']) ?>" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php foreach ($menuItem['children'] as $childItem) : ?>
                            <a class="collapse-item" href="<?= $childItem['link'] ?>"><?= $childItem['text'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>
        <?php else : ?>
            <!-- Nav Item - Single Menu Item -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= $menuItem['link'] ?>">
                    <i class="<?= $menuItem['icon'] ?>"></i>
                    <span><?= $menuItem['text'] ?></span>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <h5 class="d-lg-block d-none mt-2"><b><?php echo $toko['nama_toko']; ?>, <?php echo $toko['alamat_toko']; ?></b></h5>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="assets/img/user/<?php echo $hasil_profil['gambar']; ?>">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small ml-2"><?php echo $hasil_profil['nm_member']; ?></span>
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?page=user">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Your page content goes here -->
        </div>
    </div>
</div>