


                <!-- Begin Page Content -->
                <div class="row">
                    <div class="col-sm-1" style="margin-top: 15px; margin-right: auto;">
                        <div class="card" style="position: fixed;">
                          <img style="width: 100px; height: 100px; margin: auto; " src="<?php echo base_url(); ?>assets/img/icon-profil.png">
                          <div class="card-header m-auto">
                            Profil Mahasiswa
                          </div>
                          <div class="card-body">
                            <table class="table table-hover">
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
                          <div class="card-body text-left" style="width: 100%; height: 100%;">
                            
                            <h2>Visi dan Misi</h2>
                            <p>Menjadi lembaga pendidikan tinggi yang menghasilkan lulusan yang memiliki kompetensi akademik dan/atau profesional, yang berdaya saing secara global, serta bertakwa kepada Tuhan Yang Maha Esa, juga mampu menjadi pusat pengembangan ilmu pengetahuan, teknologi, dan/atau seni yang bermanfaat bagi masyarakat, bangsa dan negara.</p>
                            <h3>Misi</h3>
                            <p>1.Menyelenggarakan pendidikan dan pengajaran yang berkualitas.</p><p>

                            2.Menciptakan suasana akademik yang kondusif; dan.</p>

                            <p>3.Melaksanakan penelitian dan pengabdian kepada masyarakat secara berkualitas dan berkesinambungan, yang secara nyata memberikan kontribusi bagi pengembangan ilmu pengetahuan, teknologi dan/atau seni serta mendorong pengembangan masyarakat.</p>
                            
                          </div>
                          
                        </div>
                </div>
                <!-- /.container-fluid -->

