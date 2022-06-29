<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg_menu{
            background-image: ; linear-gradient(#);
        }
    </style>
</head>
<body>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>dashboard_farrel">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Laundry Online</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url()?>dashboard_farrel">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>konsumen_farrel">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Konsumen</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>paket_farrel">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Paket</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>transaksi_farrel/tambah_farrel">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Tambah Transaksi</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>transaksi_farrel/riwayat_farrel">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Riwayat Transaksi</span></a>
<!--         
</li>
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Laporan</span></a>
</li> -->
<hr class="sidebar-divider d-none d-md-block">
</li>
<li class="nav-item">
<a class="nav-link" href="<?= base_url()?>login/logout">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Log Out</span></a>
</li>



<!-- Nav Item - Tables -->


</ul>
</body>
</html>

