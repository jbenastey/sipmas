<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 29-Mar-19
 * Time: 20:24
 */
?>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <?php
            if ($this->session->flashdata('alert') == 'notification'):
                ?>
                <div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Email pengingat terkirim!
                </div>
            <?php
            endif;
            ?>
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">
                        Surat Perintah Tugas
                    </h4>
                </div>
                <div class="col-2">
                    <div style="float: right">
                        <?php
                        $sesLev = $this->session->userdata('session_level');
                        if ($sesLev == 'kepala'):
                            if ($spt['spt_status_surat'] == 'tunggu'):
                                ?>
                                <a href="<?= base_url('spt/disposition/') . $spt['spt_id'] ?>"
                                   class="btn social-btn btn-success btn-xs" data-toggle="tooltip"
                                   data-placement="bottom" onclick="return confirm('Disposisi ? ')"
                                   title="Disposisi"><i class="icon-check menu-icon"></i></a>
                                <a href="<?= base_url('spt/reject/') . $spt['spt_id'] ?>"
                                   class="btn social-btn btn-danger btn-xs" data-toggle="tooltip"
                                   data-placement="bottom" onclick="return confirm('Tolak ? ')"
                                   title="Tolak"><i class="icon-close menu-icon"></i></a>
                            <?php
                            endif;
                        else:
                            if ($spt['spt_status_surat'] == 'setuju'):
                                if ($sesLev == 'pk'):?>
                                    <a href="<?=base_url('/spt/cetak/'.$spt['spt_id'])?>" class="btn social-btn btn-success btn-xs" data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="Cetak"><i class="icon-printer menu-icon"></i></a>
                                <?php
                                else:?>
                                    <a href="<?= base_url('/spt/notification/'.$spt['spt_id'])?>" class="btn social-btn btn-primary btn-xs" data-toggle="tooltip"
                                       data-placement="bottom" onclick="return confirm('Kirim Email Pengingat ?')"
                                       title="Kirim Pengingat"><i class="icon-paper-plane menu-icon"></i></a>
                                    <a href="<?=base_url('/spt/cetak/'.$spt['spt_id'])?>" class="btn social-btn btn-success btn-xs" data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="Cetak"><i class="icon-printer menu-icon"></i></a>
                                <?php
                                endif;
                            else:
                                ?>
                                <a href="<?= base_url('spt/update/') . $spt['spt_id'] ?>"
                                   class="btn social-btn btn-success btn-xs" data-toggle="tooltip"
                                   data-placement="bottom"
                                   title="Ubah"><i class="icon-pencil menu-icon"></i></a>
                                <a href="<?= base_url('spt/delete/') . $spt['spt_id'] ?>"
                                   class="btn social-btn btn-danger btn-xs" data-toggle="tooltip"
                                   data-placement="bottom" onclick="return confirm('Anda yakin ingin menghapus? ')"
                                   title="Hapus"><i class="icon-trash menu-icon"></i></a>
                            <?php
                            endif;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nomorSurat" class="col-sm-3 col-form-label">Nomor Surat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomorSurat" placeholder="Masukkan Nomor Surat"
                                   name="nomorSurat" value="<?= $spt['spt_no_surat'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama"
                                   value="<?= $user['user_nama'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="tanggalSurat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggalSurat" placeholder="" name="tanggalSurat"
                                   value="<?= $spt['spt_tanggal'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" placeholder="" name="nip"
                                   value="<?= $user['user_nip'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="berlakuDari" class="col-sm-3 col-form-label">Berlaku dari</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="berlakuDari" placeholder="" name="berlakuDari"
                                   value="<?= $spt['spt_berlaku'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" placeholder=""
                                   name="jabatan" value="<?= $user['user_jabatan'] ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 29%">Nama</th>
                        <th style="width: 22%">Perkara</th>
                        <th style="width: 22%">Hukuman</th>
                        <th style="width: 22%">Ket</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($detail as $det):
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $det['detail_nama'] ?></td>
                            <td><?= $det['detail_perkara'] ?></td>
                            <td><?= $det['detail_hukuman'] ?></td>
                            <td><?= $det['detail_ket'] ?></td>
                        </tr>
                        <?php
                        $no++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

