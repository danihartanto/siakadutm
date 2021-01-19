<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Mata Kuliah</h1>
                            </div>
                            <form method="POST" action="<?= base_url('dosen/tambahmatkul'); ?>" class="user">
                                <?php 
                                $query = $this->db->query("SELECT MAX(kode_matkul) as kode_matkul from matkul");
                                $kode = $query; 
                                 ?>
                                <div>
                                    <label for="cari">Kode Matkul</label>
                                    <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="UTM<?= $kode;?>" readonly>
                                </div>
                                <?php ?>
                                <div class="form-group"> 
                                    <input type="text" class="form-control" name="nama_matkul" value="<?= set_value('nama_matkul'); ?>" id="name"
                                        placeholder="Nama Mata Kuliah">
                                        <small class="text-danger"><?= form_error('nama_matkul'); ?></small>
                                </div>
                                <div class="form-group"> 
                                    <input type="text" class="form-control " name="sks" value="<?= set_value('sks'); ?>" id="nim"
                                        placeholder="Jumlah SKS">
                                        <small class="text-danger"><?= form_error('sks'); ?></small>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary lg">
                                    Tambah
                                </button>
                                <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
