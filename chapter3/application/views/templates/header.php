<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Koperasi Avisena Sejahtera Binangkit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <style>
        img {
            pointer-events: none;
        }
    </style>

    <!-- Favicon -->
    <link href="<?= base_url('assets/img/favicon.ico'); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/'); ?>css/style.css?version=1" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-8 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Jl Melong No. 170, Kel. Melong, Kec. Cimahi Selatan, Kota Cimahi</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>kosena170@gmail.com</small>
            </div>

            <!-- <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div> -->
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="<?= base_url('Main'); ?>" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Ko<span class="text-white">Sena</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <?php if ($login != 'ok') { ?>
                        <a href="#home" class="nav-item nav-link">Halaman</a>
                        <a href="#about" class="nav-item nav-link">Tentang</a>
                        <a href="#program" class="nav-item nav-link">Program</a>
                        <a href="#daftar" class="nav-item nav-link">Daftar</a>
                        <a href="#team" class="nav-item nav-link">Pengurus</a>
                        <?php if ($id >= 1) { ?>
                            <a href="<?= base_url('User'); ?>" class="nav-item nav-link">Akun</a>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($id == NULL || $id < 1) { ?>
                        <a class="btn btn-outline-primary py-2 px-3" data-bs-toggle="modal" style="height: 50px; margin-top:10px" data-bs-target="#exampleModal">
                            Login
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    <?php } else if ($id >= 1) { ?>
                        <a class="btn btn-outline-primary py-2 px-3" data-bs-toggle="modal" style="height: 50px; margin-top:10px" data-bs-target="#logoutModal">
                            Hi, <?= $namanya; ?>
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-home"></i>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <div class="d-none d-lg-flex ms-2">

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->