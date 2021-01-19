

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-10">
                        <div class="card">
                          <div class="card-body">
                            <table class="table table-bordered" style="text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>keilmuan</th>
                                    <th>Kontak</th>
                                    <th>Alamat</th>

                                </tr>
                                <tr>
                                    <?php $data = $user['role_id'];
                                    $data="Dosen";  ?>
                                    <td>1</td>
                                    <td><?= $user['name']; ?></td>
                                    <td><?= $user['nim']; ?></td>
                                    <td><?= $data ?></td>
                                    <td>-</td>
                                    <td><?= $user['email']; ?></td>
                                    
                                    <td><?= $user['alamat']; ?></td>
                                </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                      
                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          