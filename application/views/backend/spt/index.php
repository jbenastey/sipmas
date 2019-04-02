<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 28-Mar-19
 * Time: 15:20
 */
?>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Surat Perintah Tugas</h4>
            <?php
            if ($this->session->flashdata('alert') == 'createSpt'):
                ?>
                <div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data Berhasil Disimpan
                </div>
            <?php
            elseif ($this->session->flashdata('alert') == 'updateSpt'):
                ?>
                <div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
                     style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data Berhasil Diperbarui
                </div>
            <?php
            elseif ($this->session->flashdata('alert') == 'deleteSpt'):
                ?>
                <div class="alert alert-danger animated fadeInDown" id="feedback" role="alert"
                     style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data Dihapus
                </div>
            <?php
            elseif ($this->session->flashdata('alert') == 'dispositionSpt'):
                ?>
                <div class="alert alert-success animated fadeInDown" id="feedback" role="alert"
                     style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Surat Disetujui
                </div>
            <?php
            elseif ($this->session->flashdata('alert') == 'rejectSpt'):
                ?>
                <div class="alert alert-danger animated fadeInDown" id="feedback" role="alert"
                     style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Surat Ditolak
                </div>
            <?php
            endif;
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table" id="order-listing">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Surat</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($surat as $spt):
                                $nama = $this->User->get_user_by_id($spt['spt_user_id']);
                                if ($spt['spt_status'] == 'aktif'):
                                    if ($this->session->userdata('session_level') != 'pk'):
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $spt['spt_no_surat'] ?></td>
                                            <td><?= $nama['user_nama'] ?></td>
                                            <td><?= date_indo($spt['spt_tanggal']) ?></td>
                                            <td>
                                                <?php
                                                if ($spt['spt_status_surat'] == 'tunggu'):
                                                    ?>
                                                    <label class="badge badge-warning">Menunggu</label>
                                                <?php
                                                elseif ($spt['spt_status_surat'] == 'setuju'):
                                                    ?>
                                                    <label class="badge badge-success">Disetujui</label>
                                                <?php
                                                elseif ($spt['spt_status_surat'] == 'tolak'):
                                                    ?>
                                                    <label class="badge badge-danger">Ditolak</label>
                                                <?php
                                                endif;
                                                ?>
                                            </td>
                                            <td><a href="<?= base_url('spt/read/') . $spt['spt_id'] ?>"
                                                   class="btn btn-outline-primary">Lihat</a></td>
                                        </tr>
                                        <?php
                                        $no++;
                                    elseif ($this->session->userdata('session_level') == 'pk'):
                                        if ($spt['spt_user_id'] == $this->session->userdata('session_id')):
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $spt['spt_no_surat'] ?></td>
                                            <td><?= $nama['user_nama'] ?></td>
                                            <td><?= date_indo($spt['spt_tanggal']) ?></td>
                                            <td>
                                                <?php
                                                if ($spt['spt_status_surat'] == 'tunggu'):
                                                    ?>
                                                    <label class="badge badge-warning">Menunggu</label>
                                                <?php
                                                elseif ($spt['spt_status_surat'] == 'setuju'):
                                                    ?>
                                                    <label class="badge badge-success">Disetujui</label>
                                                <?php
                                                elseif ($spt['spt_status_surat'] == 'tolak'):
                                                    ?>
                                                    <label class="badge badge-danger">Ditolak</label>
                                                <?php
                                                endif;
                                                ?>
                                            </td>
                                            <td><a href="<?= base_url('spt/read/') . $spt['spt_id'] ?>"
                                                   class="btn btn-outline-primary">Lihat</a></td>
                                        </tr>
                                        <?php
                                        $no++;
                                        endif;
                                    endif;
                                endif;
                            endforeach;
                            ?>
                            <?php
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
