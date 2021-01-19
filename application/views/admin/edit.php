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
                            <form method="POST" action="">

                            
                                <div class="form-group">
                                    <label for="cari">id User</label>
                                    <input type="text" class="form-control" id="nim" name="id_user" value="<?php echo $user->id_user ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="cari">Nomor Induk</label>
                                    <input type="text" class="form-control" id="nim" name="id_user" value="<?php echo $user->nim ?>" readonly>
                                </div>
                                
                                <div class="form-group"> 
                                    <input type="text" class="form-control" name="nim" value="<?php echo $user->name ?>" id="nim" placeholder="Nama Lengkap"> <small class="text-danger"></small>
                                </div>
                                
                                <div class="form-group"> 
                                    <input type="text" class="form-control " name="email" value="<?php echo $user->email ?>" id="email" placeholder="Email"> <small class="text-danger"></small>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary lg" value="save">
                                    Perbarui
                                </button>
                                <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
