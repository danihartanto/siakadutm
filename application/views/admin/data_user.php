<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <?= $this->session->flashdata('hapus_sukses'); ?>
                      <div class="col-sm">
                        <div class="card">
                          <div class="card-body">
                            <table class="table mx-auto mt-0 ml-1">
                                <thead style="text-align: center;">
                                    <small>
                                    <th>#</th>
                                    <th>nama</th>
                                    <th>nim </th>
                                    <th>email</th>
                                    <th>alamat</th>
                                    <th>level</th>
                                    <th colspan="2">Option</th>
                                    </small>
                                    
                                </thead>
                                <tbody style="text-align: center;">
                                    
                                    <?php
                                    $no = 1;
                                    foreach($user as $db) : ?>
                                    
                                    <tr>
                                        <td><small><?php echo $no; ?></small></td>
                                        <td><?= $db['name']; ?></td>
                                        <td><?= $db['nim']; ?></td>
                                        <td><?= $db['email']; ?></td>
                                        <td><?= $db['alamat'];?></td>
                                        <td><?= $db['role_id']; ?></td>
                                        
                                        <td>
                                            <a href="<?= base_url(); ?>admin/ubahDataUser/<?= $db['id_user']; ?>" <button type="button" class="btn btn-warning btn-xs"><span >Edit</span></button></a>
                                        </td>

                                        <td>
                                            <a href="<?= base_url(); ?>admin/deleteData/<?= $db['id_user']; ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-danger btn-xs"><span >Delete</span></button></a>
                                        </td>
                                        </tr>
                                    <?php
                                    $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          