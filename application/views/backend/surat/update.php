<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 24-Mar-19
 * Time: 20:26
 */
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Perbarui Data Surat</h4>
            <?php echo form_open('surat/update/'. $surat['permintaan_id'], array('class' => 'form forms-sample', 'id' => 'formValidation')) ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nomorSurat" class="col-sm-3 col-form-label">Nomor Surat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomorSurat" placeholder="Masukkan Nomor Surat" value="<?=$surat['permintaan_nomor']?>" name="nomorSurat" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="tanggalSurat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-9">
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="date" class="form-control" value="<?=$surat['permintaan_tanggal']?>" name="tanggalSurat" required>
                                <div class="input-group-addon input-group-text">
                                    <span class="mdi mdi-calendar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <table class="table" id="dynamic_field">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Perkara</th>
                            <th>Hukuman</th>
                            <th>Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($detail as $det):
                    ?>
                    <tr>
                        <td><input type="text" placeholder="Nama" class="form-control" name="nama[]" value="<?=$det['detail_nama']?>" autocomplete="off"></td>
                        <td><input type="text" placeholder="Perkara" class="form-control" name="perkara[]" value="<?=$det['detail_perkara']?>" autocomplete="off"></td>
                        <td><input type="text" placeholder="Hukuman" class="form-control" name="hukuman[]" value="<?=$det['detail_hukuman']?>" autocomplete="off"></td>
                        <td><input type="text" placeholder="Ket" class="form-control" name="ket[]" value="<?=$det['detail_ket']?>" autocomplete="off"></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

