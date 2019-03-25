<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 23-Mar-19
 * Time: 11:29
 */
?>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                Surat Permintaan
            </h4>
            <div style="float: right">
                <?php
                if ($this->session->userdata('session_level') == 'umum'):
                    if ($surat['permintaan_status_surat'] == 'tunggu'):
                        ?>
                        <a href="<?= base_url('surat/update/') . $surat['permintaan_id']?>" class="btn social-btn btn-success btn-xs" data-toggle="tooltip"
                           data-placement="bottom"
                           title="Ubah"><i class="icon-pencil menu-icon"></i></a>
                        <a href="<?= base_url('surat/delete/') . $surat['permintaan_id']?>" class="btn social-btn btn-danger btn-xs" data-toggle="tooltip"
                           data-placement="bottom" onclick="return confirm('Anda yakin ingin menghapus? ')"
                           title="Hapus"><i class="icon-trash menu-icon"></i></a>
                    <?php
                    endif;
                elseif ($this->session->userdata('session_level') == 'kepala'):
                    if ($surat['permintaan_status_surat'] == 'tunggu'):
                        ?>
                        <a href="<?= base_url('surat/disposition/') . $surat['permintaan_id'] ?>"
                           class="btn social-btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom"
                           title="Disposisi" onclick="return confirm('Disposisi ?')"><i
                                    class="icon-check menu-icon"></i></a>
                        <a href="<?= base_url('surat/reject/') . $surat['permintaan_id'] ?>"
                           class="btn social-btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom"
                           title="Tolak" onclick="return confirm('Tolak ?')"><i class="icon-close menu-icon"></i></a>
                    <?php
                    endif;
                endif;
                ?>
            </div>
            <div>
                <table>
                    <tr>
                        <td style="text-align: right">Nomor Surat</td>
                        <td> :</td>
                        <td><?= $surat['permintaan_nomor'] ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Tanggal Surat</td>
                        <td> :</td>
                        <td><?= date_indo($surat['permintaan_tanggal']) ?></td>
                    </tr>
                </table>
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
