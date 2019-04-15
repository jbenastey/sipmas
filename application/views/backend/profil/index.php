<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Mar-19
 * Time: 19:01
 */
?>
<div class="row user-profile">
    <?php
    echo $error;
    if ($this->session->flashdata('alert') == 'updateUser'):
        ?>
        <div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
            <button type="button" class="close" data-dismiss="alert"></button>
            Profil Diperbarui
        </div>
    <?php
    elseif ($this->session->flashdata('alert') == 'updatePassword'):
        ?>
        <div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
            <button type="button" class="close" data-dismiss="alert"></button>
            Password Diperbarui
        </div>
    <?php
    elseif ($this->session->flashdata('alert') == 'updateFoto'):
        ?>
        <div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
            <button type="button" class="close" data-dismiss="alert"></button>
            Foto Diperbarui
        </div>
    <?php
    elseif ($this->session->flashdata('alert') == 'updatePasswordFailed'):
        ?>
        <div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
            <button type="button" class="close" data-dismiss="alert"></button>
            Password Lama Salah
        </div>
    <?php
    endif;
    ?>
    <div class="col-lg-4 side-left d-flex align-items-stretch">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body avatar">
                        <h4 class="card-title">Info</h4>
                        <img src="<?= base_url('assets/images/faces/face6.jpg') ?>" alt="">
                        <p class="name"><?= $profil['user_nama'] ?></p>
                        <p class="designation">- <?= $level ?> -</p>
                        <a class="d-block text-center text-dark" href="#"><?= $profil['user_email'] ?></a>
                        <a class="d-block text-center text-dark" href="#"><?= $profil['user_nomor_hp'] ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 stretch-card">
                <div class="card">
                    <div class="card-body overview">
                        <ul class="achivements">
                            <li><p>34</p>
                                <p>Projects</p></li>
                            <li><p>23</p>
                                <p>Task</p></li>
                            <li><p>29</p>
                                <p>Completed</p></li>
                        </ul>
                        <div class="wrapper about-user">
                            <h4 class="card-title mt-4 mb-3">About</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                        </div>
                        <div class="info-links">
                            <a class="website" href="http://urbanui.com/">
                                <i class="mdi mdi-earth text-gray"></i>
                                <span>http://urbanui.com/</span>
                            </a>
                            <a class="social-link" href="#">
                                <i class="mdi mdi-facebook text-gray"></i>
                                <span>https://www.facebook.com/johndoe</span>
                            </a>
                            <a class="social-link" href="#">
                                <i class="mdi mdi-linkedin text-gray"></i>
                                <span>https://www.linkedin.com/johndoe</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 side-right stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h4 class="card-title mb-0">Detail</h4>
                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab"
                               aria-controls="info" aria-expanded="true">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab"
                               aria-controls="avatar">Foto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab"
                               aria-controls="security">Keamanan</a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
                            <?php echo form_open('profil/update', array('class' => 'form forms-sample', 'id' => 'formValidation')) ?>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Ganti nama"
                                       name="userNama" value="<?= $profil['user_nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Nomor Hp</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Ganti nomor hp"
                                       name="userNomor" value="<?= $profil['user_nomor_hp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Ganti alamat email"
                                       name="userEmail" value="<?= $profil['user_email'] ?>">
                            </div>
                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                <button class="btn btn-outline-danger">Batal</button>
                            </div>
                            <?= form_close() ?>
                        </div><!-- tab content ends -->
                        <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                            <div class="wrapper mb-5 mt-4">
                                <span class="badge badge-warning text-white">Note : </span>
                                <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 5MB .</p>
                            </div>
                            <?php echo form_open('profil/foto', array('class' => 'form forms-sample', 'id' => 'formValidation', 'enctype' => 'multipart/form-data')) ?>
                                <input type="file" class="dropify" data-max-file-size="5mb"
                                       data-default-file="<?= base_url('assets/images/faces/face6.jpg') ?>" name="userFoto"/>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-success mr-2">Update</button>
                                    <button class="btn btn-outline-danger">Batal</button>
                                </div>
                            <?= form_close() ?>
                        </div>
                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                            <?php echo form_open('profil/password', array('class' => 'form forms-sample', 'id' => 'formValidation')) ?>
                                <div class="form-group">
                                    <label for="change-password">Ganti Password</label>
                                    <input type="password" class="form-control" id="change-password" name="oldPass"
                                           placeholder="Masukkan Password Lama">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="new-password" name="newPass"
                                           placeholder="Masukkan Password Baru">
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-success mr-2">Update</button>
                                    <button class="btn btn-outline-danger">Batal</button>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>