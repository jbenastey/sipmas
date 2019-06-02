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
        <?php
        if ($this->session->userdata('session_level') == 'kepala'):
            ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 style="text-align: center">Surat Permintaan</h3>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('surat')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
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
                            <a href="<?=base_url('surat')?>"><i class="mdi mdi-note-multiple icon-lg text-success"></i></a>
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
                            <a href="<?=base_url('surat')?>"><i class="mdi mdi-note-multiple icon-lg text-warning"></i></a>
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
                            <a href="#"><i class="mdi mdi-account-multiple icon-lg text-danger"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Jumlah Warga Binaan</p>
                                <h6><?= $tahanan ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 style="text-align: center">Surat Perintah Tugas</h3>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Semua Surat Perintah Tugas</p>
                                <h6><?= $spt ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple icon-lg text-success"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">SPT Disetujui</p>
                                <h6><?= $sptsetuju ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple icon-lg text-warning"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">SPT Menunggu</p>
                                <h6><?= $spttunggu ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="#"><i class="mdi mdi-account-multiple icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Jumlah Pembimbing Kemasyarakatan</p>
                                <h6><?= $pembimbing ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        elseif ($this->session->userdata('session_level') == 'umum'):
            ?>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('surat')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
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
                            <a href="<?=base_url('surat')?>"><i class="mdi mdi-note-multiple icon-lg text-success"></i></a>
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
                            <a href="<?=base_url('surat')?>"><i class="mdi mdi-note-multiple icon-lg text-warning"></i></a>
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
                            <a href="#"><i class="mdi mdi-account-multiple icon-lg text-danger"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Jumlah Warga Binaan</p>
                                <h6><?= $tahanan ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        elseif ($this->session->userdata('session_level') == 'kasubsibka' || $this->session->userdata('session_level') == 'kasubsibkd'):
            ?>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Semua Surat Perintah Tugas</p>
                                <h6><?= $spt ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple icon-lg text-success"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">SPT Disetujui</p>
                                <h6><?= $sptsetuju ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple icon-lg text-warning"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">SPT Menunggu</p>
                                <h6><?= $spttunggu ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="#"><i class="mdi mdi-account-multiple icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Jumlah Pembimbing Kemasyarakatan</p>
                                <h6><?= $pembimbing ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('laporan')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Jumlah Laporan Penelitian</p>
                                <h6><?= $laporan ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        elseif ($this->session->userdata('session_level') == 'pk'):
            ?>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('spt')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Surat Perintah Tugas</p>
                                <h6><?= $sptpk ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-md-center">
                            <a href="<?=base_url('laporan')?>"><i class="mdi mdi-note-multiple-outline icon-lg text-primary"></i></a>
                            <div class="ml-3">
                                <p class="mb-0">Jumlah Laporan Penelitian</p>
                                <h6><?= $laporanpk ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>
