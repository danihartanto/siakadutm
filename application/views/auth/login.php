



    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang di</h1>
                                        <h2 class="h3 text-gray-900 mb-4">Sistem Akademik Universitas Trunojoyo Madura</h2>

                                    </div>
                                    <?= $this->session->flashdata('message' ) ; ?>
                                    <form method="POST" action="<?= base_url('auth'); ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="Nim" name="nim" value="<?= set_value('nim'); ?>" placeholder="Enter Number ID College...">
                                            <small class="text-danger"><?= form_error('nim'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                                <small class="text-danger"><?= form_error('password'); ?></small>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/register') ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
