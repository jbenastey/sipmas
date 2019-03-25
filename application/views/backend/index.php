<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Feb-19
 * Time: 20:55
 */
?>
<div class="col-12">
    <?php
    if ($this->session->flashdata('alert') == 'success_login'):
        ?>
        <div class="alert alert-success animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert"></button>
            Selamat Datang <?= $level ?>
        </div>
    <?php
    endif;
    ?>
    <div class="row">
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i>
                        <div class="ml-3">
                            <p class="mb-0">Semua Surat</p>
                            <h6><?= $surat ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-note-multiple icon-lg text-success"></i>
                        <div class="ml-3">
                            <p class="mb-0">Surat Disetujui</p>
                            <h6><?= $setuju ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-note-multiple icon-lg text-warning"></i>
                        <div class="ml-3">
                            <p class="mb-0">Surat Menunggu</p>
                            <h6><?= $tunggu ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-account-multiple icon-lg text-danger"></i>
                        <div class="ml-3">
                            <p class="mb-0">Jumlah Warga Binaan</p>
                            <h6><?= $tahanan ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
