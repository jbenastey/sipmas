<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 10:09:32 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Pembimbing Kemasyarakatan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/node_modules/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/node_modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <!-- endinject -->
    <!--    Animate-->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>">
    <!--    endanimate-->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo-bapas.png')?>" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth register-full-bg">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <h4 class="font-weight-light">Register Pembimbing Kemasyarakatan</h4>
                            <form class="pt-4" action="<?=base_url('register')?>" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor HP</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nomor HP" name="nomorHp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIP</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="NIP" name="nip">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jabatan" name="jabatan">
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="mt-5">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium" name="register">Register</button>
                                </div>
                                <div class="mt-2 text-center">
                                    <a href="<?=base_url('login')?>" class="auth-link text-black">Sudah punya akun? <span class="font-weight-medium">Login</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?=base_url()?>assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?=base_url()?>assets/js/off-canvas.js"></script>
<script src="<?=base_url()?>assets/js/hoverable-collapse.js"></script>
<script src="<?=base_url()?>assets/js/misc.js"></script>
<script src="<?=base_url()?>assets/js/settings.js"></script>
<script src="<?=base_url()?>assets/js/todolist.js"></script>
<!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 10:09:32 GMT -->
</html>
