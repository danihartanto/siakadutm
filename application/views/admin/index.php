<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <td>UserAkses:</td>
                                    <td><?= $user['role_id']; ?></td>
                                </tr>
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
                                    <td>Waktu Daftar:</td>
                                    <td><?= $user['date_created']; ?></td>
                                </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                          </div>
                        </div>
                      </div>
                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          