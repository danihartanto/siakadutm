

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
                          <div class="col-sm-6 align-left">
                            <form action="<?= base_url('user/tambahMatkul'); ?>" method="post">
                               
                              <div class="form-group">
                                  <label for="" style="float: left;">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['name']; ?>" readonly>
                                  <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                              </div>
                              <div class="form-group">
                                  <label style="float: left;">NIM</label>
                                  <input type="text" class="form-control" id="nim" name="nim" value="<?= $user['nim']; ?>" readonly>
                                  <small class=" form-text text-danger"><?= form_error('npm'); ?></small>
                              </div>
                              <div class="form-group">
                                  <label style="float: left;">Mata Kuliah</label>
                                  <select class="form-control" id="matkul" name="matkul">
                                     
                                      <?php foreach ($matkul->result() as $result) :?>
                                        <option value="<?= $result->nama_matkul ?>" selected><?= $result->nama_matkul ?></option>
                                        <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label style="float: left;">Jam</label>
                                  <select class="form-control" id="jam" name="jam">
                                     
                                      <?php foreach ($matkul->result() as $result) :?>
                                        <option value="<?= $result->jam ?>" selected><?= $result->jam ?></option>
                                        <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label style="float: left;">Kelas</label>
                                  <select class="form-control" id="kelas" name="kelas">
                                     
                                      <?php foreach ($kelas->result() as $result) :?>
                                        <option value="<?= $result->nama_kelas ?>" selected><?= $result->nama_kelas ?></option>
                                        <?php endforeach;?>
                                  </select>
                              </div>
                             
                              <button type=" submit" name="tambahMatkul" class="btn btn-primary float-right">Kirim</button>
                            </form>
                          </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
