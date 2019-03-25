<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Feb-19
 * Time: 20:55
 */
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <?php
            if ($this->session->flashdata('alert') == 'success_login'):
                ?>
                <div class="alert alert-success animated fadeInDown" id="feedback" role="alert">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Selamat Datang <?= $level?>
                </div>
            <?php
            endif;
            ?>
            Selamat Datang <?= $level?>
        </div>
    </div>
</div>
