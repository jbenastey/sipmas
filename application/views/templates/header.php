<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Feb-19
 * Time: 17:06
 */
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Penelitian Kemasyarakatan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/simple-line-icons/css/simple-line-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/flag-icon-css/css/flag-icon.min.css') ?>">
    <link rel="stylesheet"
          href="<?= base_url('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/font-awesome/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet"
          href="<?= base_url('assets/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css') ?>">
    <!-- End plugin css for this page -->
<!--    Animate -->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">

    <!--    -->
    <!-- Datatables-->
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>"/>
    <!-- enddatatables-->
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>"/>
    <!-- enddatepicker-->
<!--    Jquery Toast-->
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/jquery-toast-plugin/dist/jquery.toast.min.css')?>"/>
    <!--    endtoast-->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/apps.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo-bapas.png') ?>"/>
</head>
<body class="sidebar-fixed">
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="#"><img src="<?= base_url('assets/images/logo-bapas.png') ?>"
                                                             alt="logo" style="width: 10%"/></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="<?= base_url('assets/images/logo-bapas.png') ?>"
                                                                  alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav">

            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="<?php echo base_url() ?>profile" title="Profil">
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="<?php echo base_url() ?>logout"
                       onclick="return confirm('Apakah anda yakin ingin keluar?')" title="Keluar">
                        <i class="icon-logout"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>
                        Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                        Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles pink"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image">
                                <img src="<?= base_url('assets/images/faces/face10.jpg') ?>" alt="image"/>
                                <span class="online-status online"></span>
                                <!--change class online to offline or busy as needed-->
                            </div>
                            <div class="profile-name">
                                <p class="name">
                                    <?= $this->session->userdata['session_name'] ?>
                                </p>
                                <p class="designation">
                                    <?= $this->session->userdata['session_level'] ?>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url()?>">
                            <i class="icon-rocket menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <?php
                    if ($this->session->userdata('session_level') == 'umum'):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('surat')?>">
                                <i class=" icon-docs menu-icon"></i>
                                <span class="menu-title">Surat Permintaan</span>
                            </a>
                        </li>
                        <?php
                    elseif ($this->session->userdata('session_level') == 'kepala'):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('surat')?>">
                                <i class=" icon-docs menu-icon"></i>
                                <span class="menu-title">Surat Permintaan</span>
                            </a>
                        </li>
                    <?php
                    endif;
                    ?>
                </ul>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="row">