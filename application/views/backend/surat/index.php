<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Feb-19
 * Time: 22:14
 */

?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                Surat Permintaan
            </h4>
            <div class="row">
                <?php
                if ($this->session->flashdata('alert') == 'create'):
                    ?>
                    <div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
                         style="width: 100%;">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        Data Berhasil Disimpan
                    </div>
                <?php
                elseif ($this->session->flashdata('alert') == 'update'):
                    ?>
                    <div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
                         style="width: 100%;">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        Data Berhasil Diubah
                    </div>
                <?php
                elseif ($this->session->flashdata('alert') == 'delete'):
                    ?>
                    <div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        Data Berhasil Dihapus
                    </div>
                <?php
                elseif ($this->session->flashdata('alert') == 'disposition'):
                    ?>
                    <div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
                         style="width: 100%;">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        Surat Disetujui
                    </div>
                <?php
                elseif ($this->session->flashdata('alert') == 'reject'):
                    ?>
                    <div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        Surat Ditolak
                    </div>
                <?php
                endif;
                ?>
                <div class="col-12">

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                                <?php
                                if ($this->session->userdata('session_level') == 'umum'):
                                    ?>
                                    <a href="<?= base_url('surat/create') ?>" class="btn btn-primary btn-sm" style="float: right; margin-left: 5px"><strong>+</strong>Tambah</a>
                                <?php
                                endif;
                                ?>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $sesLev = $this->session->userdata('session_level');
                            foreach ($surat as $srt):
                                if ($srt['permintaan_status'] == 'aktif'):
                                    if ($sesLev == 'kasubsibka' || $sesLev == 'kasubsibkd'):
                                        if ($srt['permintaan_status_surat'] == 'setuju'):
                                            ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $srt['permintaan_nomor'] ?></td>
                                                <td><?= date_indo($srt['permintaan_tanggal']) ?></td>
                                                <td>
                                                    <?php foreach ($detail as $det):
                                                        if ($srt['permintaan_id'] == $det['detail_permintaan_id']):
                                                            if ($det['detail_spt_id'] == null):
                                                                ?>
                                                                <label class="badge badge-warning">Belum</label> <?php break; ?>
                                                            <?php
                                                            else:?>
                                                                <label class="badge badge-success">Sudah</label> <?php break; ?>
                                                            <?php
                                                            endif;
                                                        endif;
                                                    endforeach;
                                                    ?>
                                                </td>
                                                <td><a href="<?= base_url('surat/read/') . $srt['permintaan_id'] ?>"
                                                       class="btn btn-outline-primary">Lihat</a></td>
                                            </tr>
                                            <?php
                                            $no++;
                                        endif;
                                    else:?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $srt['permintaan_nomor'] ?></td>
                                            <td><?= date_indo($srt['permintaan_tanggal']) ?></td>
                                            <td>
                                                <?php
                                                if ($srt['permintaan_status_surat'] == 'tunggu'):
                                                    ?>
                                                    <label class="badge badge-warning">Menunggu</label>
                                                <?php
                                                elseif ($srt['permintaan_status_surat'] == 'setuju'):
                                                    ?>
                                                    <label class="badge badge-success">Disetujui</label>
                                                <?php
                                                elseif ($srt['permintaan_status_surat'] == 'tolak'):
                                                    ?>
                                                    <label class="badge badge-danger">Ditolak</label>
                                                <?php
                                                endif;
                                                ?>
                                            </td>
                                            <td><a href="<?= base_url('surat/read/') . $srt['permintaan_id'] ?>"
                                                   class="btn btn-outline-primary">Lihat</a></td>
                                        </tr>
                                        <?php
                                        $no++;
                                    endif;
                                endif;
                            endforeach;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

