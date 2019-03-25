<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 21-Mar-19
 * Time: 22:14
 */
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Masukkan Data Surat</h4>
            <?php echo form_open('surat/create', array('class' => 'form forms-sample', 'id' => 'formValidation')) ?>
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
                        <label for="tanggalSurat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-9">
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="date" class="form-control" name="tanggalSurat" required>
                                <div class="input-group-addon input-group-text">
                                    <span class="mdi mdi-calendar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlahWarga" class="col-sm-2 col-form-label">Jumlah Warga Binaan</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="number" id="jumlahWarga" class="form-control"
                               autocomplete="off" required>
                        <div class="input-group-addon input-group-text">
                            <button type="button" name="add" id="add" class="btn btn-success btn-xs"><i
                                        class="fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <table class="table" id="dynamic_field">
                    <tr>

                    </tr>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
