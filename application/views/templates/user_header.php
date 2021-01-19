<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
                      <a class="navbar-brand" href="<?= base_url('user'); ?>">Siakad | Trunojoyo</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <div class="topbar-divider d-none d-sm-block"></div>
                          <a class="nav-item nav-link active" href="<?= base_url('user'); ?>">Home <span class="sr-only">(current)</span></a>
                          <div class="topbar-divider d-none d-sm-block"></div>
                          <a class="nav-item nav-link" href="<?= base_url('user/krs'); ?>">KRS</a>
                          <div class="topbar-divider d-none d-sm-block"></div>
                          <a class="nav-item nav-link" href="<?= base_url('user/khs'); ?>">KHS</a>
                          <div class="topbar-divider d-none d-sm-block"></div>
                          <a class="nav-item nav-link disabled" href="#">Daftar Dosen</a>
                        </div>
                      </div>
                    </nav>
                    <!-- Topbar Navbar -->
                    
                </nav>
                <!-- End of Topbar -->