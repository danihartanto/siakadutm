<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $user['nim']; ?>">
                            <small class=" form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                            <small class=" form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" value="<?= $user['password']; ?>">
                            <small class=" form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                            <small class=" form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        
                        <button type=" submit" name="ubahDataUser" class="btn btn-primary float-right">Ubah Data</button>
                    </form>

                </div>
            </div>
        </div>


    </div>
</div>
</div> 