<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-body">
                            <table class="table table-bordered">
                                <thead style="text-align: center;">
                                    <th>nomer</th>
                                    <th>kode</th>
                                    <th>mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Tanggal Ditambahkan</th>
                                    <th colspan="2">Option</th>
                                    
                                </thead>
                                <tbody style="text-align: center;">
                                    
                                    <?php
                                        $no = 1;
                                        foreach($database as $db) : ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $db->kode_matkul; ?></td>
                                                <td><?php echo $db->nama_matkul; ?></td>
                                                <td><?php echo $db->sks; ?></td>
                                                <td><?php echo $db->date_created; ?></td>
                                                
                                                <td>
                                                    <a href="<?php echo base_url('dosen/updatematkul'.$db->kode_matkul); ?>"><button type="button" class="btn btn-warning btn-xs"><span >Edit</span></button></a>
                                                    
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('dosen/hapusdata/'.$db->kode_matkul); ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-danger btn-xs"><span >Delete</span></button></a>
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

          