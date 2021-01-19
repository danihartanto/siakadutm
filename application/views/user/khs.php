

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
                        </div>
                      </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
