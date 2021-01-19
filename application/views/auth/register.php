

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="POST" action="<?= base_url('auth/register'); ?>" class="user">
                                <div class="form-group"> 
                                    <input type="text" class="form-control form-control-user" name="name" id="name"
                                        placeholder="Full Name">
                                        <small class="text-danger"><?= form_error('name'); ?></small>
                                </div>
                                <div class="form-group"> 
                                    <input type="text" class="form-control form-control-user" name="nim" id="nim"
                                        placeholder="Nomor Induk Mahasiswa">
                                        <small class="text-danger"><?= form_error('nim'); ?></small>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" id="email"
                                        placeholder="Email Address">
                                        <small class="text-danger"><?= form_error('email'); ?></small>
                                </div>
                                <div class="form-group"> 
                                    <textarea type="text" class="form-control form-control-user" name="alamat" id="alamat"
                                        placeholder="Alamat Lengkap"></textarea>
                                        <small class="text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                            <small class="text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                            <small class="text-danger"><?= form_error('password2'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="role_id" id="role_id" >
                                        <option value="3" >Dosen</option>
                                        <option value="2" >Mahasiswa</option>
                                    </select>
                                </div>
                                <br>
                               
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
