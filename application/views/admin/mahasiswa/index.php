<div class="container col-md-10">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-7">
        <div class="col-md-5">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered mx-auto">
        <thead style="text-align: center;">
            <small>
            <th>#</th>
            <th>nama</th>
            <th>nim </th>
            <th>email</th>
            <th>jurusan</th>
            <th colspan="2">Option</th>
            </small>
                                    
        </thead>
        <tbody style="text-align: center;">
                                    
        <?php
            $no = 1;
            foreach($mahasiswa as $mhs) : ?>
            
            <tr>
                <td><small><?php echo $no; ?></small></td>
                <td><small><?= $mhs['nama']; ?></small></td>
                <td><?= $mhs['npm']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                
                <td>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" <button type="button" class="btn btn-warning btn-xs"><span >Edit</span></button></a>
                </td>

                <td>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-danger btn-xs"><span >Delete</span></button></a>
                </td>
                </tr>
            <?php
            $no++;
            endforeach;
            ?>
        </tbody>
    </table>

</div>