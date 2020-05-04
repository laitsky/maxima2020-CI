    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <?= $this->session->flashdata('logout_msg'); ?>
                                    <?= $this->session->flashdata('auth_guard'); ?>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <form class="user" action="login" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan email student...">
                                            <?= form_error('email', '<small class="form-text text-danger ml-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan password...">
                                            <?= form_error('password', '<small class="form-text text-danger ml-3">', '</small>'); ?>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Masuk</button>
                                        <hr>
                                    </form>
                                    <hr>
                                   <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/daftar') ?>">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>