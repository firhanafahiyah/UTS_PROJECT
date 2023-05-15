<?php

$menus = [
    'Home' => 'index.php',
    'Produk' => 'produk.php',
    'Pesanan' => 'pesanan.php',
    'Jenis Produk' => 'jenis_produk.php',
    'Logout' => '../index.php'
];

$icons = [
    'Home' => 'nav-icon fas fa-list',
    'Produk' => 'nav-icon fas fa-list',
    'Pesanan' => 'nav-icon fas fa-list',
    'Jenis Produk' => 'nav-icon fas fa-list',
    'Logout' => 'nav-icon fas fa-list'
];

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Firhan</a>
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
                <?php foreach ($menus as $title => $link) : ?>
                    <li class="nav-item">
                        <a href="<?= $link ?>" class="nav-link">
                            <i class="<?= $icons[$title] ?>"></i>
                            <p>
                                <?= $title ?>
                            </p>
                        </a>
                    </li>
                <?php endforeach  ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">