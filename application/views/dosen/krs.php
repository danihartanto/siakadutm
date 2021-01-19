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
                          <a class="nav-item nav-link" href="#">KRS</a>
                          <div class="topbar-divider d-none d-sm-block"></div>
                          <a class="nav-item nav-link" href="#">KHS</a>
                          <div class="topbar-divider d-none d-sm-block"></div>
                          <a class="nav-item nav-link disabled" href="#">Daftar Dosen</a>
                        </div>
                      </div>
                    </nav>
                    <!-- Topbar Navbar -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="row">
                    <div class="col-sm-1" style="margin-top: 15px; margin-right: auto;">
                        <div class="card" style="position: fixed;">
                          <img style="width: 100px; height: 100px; margin: auto; " src="<?php echo base_url(); ?>assets/img/icon-profil.png">
                          <div class="card-header m-auto">
                            Profil Mahasiswa
                          </div>
                          <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <td>nama:</td>
                                    <td><?= $user['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>NIM:</td>
                                    <td><?= $user['nim']; ?></td>
                                </tr>
                                <tr>
                                    <td>Prodi:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Alamat:</td>
                                    <td><?= $user['alamat']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun Masuk:</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <a href="<?= base_url(); ?>auth/logout" type="button" class="btn btn-danger">Logout</a>
                            <hr>
                            <br>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-9" style="margin-top: 5px;">
                        <div class="card text-center" style="margin-top: 10px;">
                          <div class="card-header">
                            Information
                          </div>
                          <div class="col-sm-7 m-auto">
                            <form>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <a href="#" type="button" class="btn btn-success">Kirim</a>
                              <a href="#" type="button" class="btn btn-danger">Batal</a>
                            </form>
                          </div>
                          
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                      <br>
                      <br>
                      <hr class="sidebar-divider d-md-block">
                        Universitas Trunojoyo Madura @2020<cite title="Source Title"> <br>Build & Desaigned by Mochamad Dani Hartanto</cite>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
   

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>