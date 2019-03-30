<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 29-Mar-19
 * Time: 10:57
 */
?>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Masukkan Data Surat Perintah Tugas</h4>
            <?php echo form_open('spt/create/'. $surat['permintaan_id'], array('class' => 'form forms-sample', 'id' => 'formValidation')) ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nomorSurat" class="col-sm-3 col-form-label">Nomor Surat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomorSurat" placeholder="Masukkan Nomor Surat" name="nomorSurat" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="tanggalSurat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggalSurat" placeholder="" name="tanggalSurat" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="berlakuDari" class="col-sm-3 col-form-label">Berlaku dari</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="berlakuDari" placeholder="" name="berlakuDari" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan" required>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h6>Warga Binaan :</h6>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 95%">Nama</th>
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
                        </tr>
                        <?php
                        $no++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
