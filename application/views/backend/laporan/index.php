<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 02-Apr-19
 * Time: 21:45
 */
?>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <?= $error ?>
            <h4 class="card-title">Laporan Penelitian Kemasyarakatan</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="order-listing">
                            <?php
                            if ($this->session->userdata('session_level') == 'pk'):
                                ?>
                                <button class="btn btn-primary btn-sm"
                                        style="float: right; margin-left: 5px" data-toggle="modal"
                                        data-target="#exampleModal"><i class="icon-cloud-upload"></i>Upload
                                </button>
                            <?php
                            endif;
                            ?>
                            <thead>
                            <tr>
                                <th>No</th>
                                <?php
                                if ($this->session->userdata('session_level') != 'pk'):
                                    ?>
                                    <th>Nama Pembimbing Kemasyarakatan</th>
                                <?php
                                endif;
                                ?>
                                <th>Nama Warga Binaan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            if ($this->session->userdata('session_level') == 'pk'):
                                foreach ($laporan as $l) :
                                    if ($l['laporan_user_id'] == $this->session->userdata('session_id')):
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $l['detail_nama'] ?></td>
                                            <td>
                                                <a href="<?= base_url('assets/upload/laporan/' . $l['laporan_upload']) ?>"
                                                   class="btn btn-outline-primary btn-sm"
                                                   onclick="return confirm('Download ?')"><i class="fa fa-download"></i>Download</a>
                                            </td>
                                        </tr>

                                        <?php
                                        $no++;
                                    endif;
                                endforeach;
                            else:
                                foreach ($laporan as $l):
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $l['user_nama'] ?></td>
                                    <td><?= $l['detail_nama'] ?></td>
                                    <td><a href="<?= base_url('assets/upload/laporan/' . $l['laporan_upload']) ?>"
                                           class="btn btn-outline-primary btn-sm"
                                           onclick="return confirm('Download ?')"><i class="fa fa-download"></i>Download</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                                endforeach;
                            endif;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('laporan/create', array('class' => 'form forms-sample', 'id' => 'formValidation', 'enctype' => 'multipart/form-data')) ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Warga Binaan</label>
                    <div class="col-sm-12">
                        <select class="js-example-basic-single" style="width:100%" id="nama"
                                placeholder="Masukkan Nama" name="detailId" required>
                            <option value="0">- Pilih Nama -</option>
                            <?php
                            foreach ($detail as $d):
                                if ($d['detail_spt_id'] != null):
                                    ?>
                                    <option value="<?= $d['detail_id'] ?>"><?= $d['detail_nama'] ?></option>
                                <?php
                                endif;
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Laporan</label>
                    <input type="file" name="laporan" class="dropify"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
