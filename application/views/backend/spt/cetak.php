<style type="text/css">
    h2 {
        margin-bottom: 7px;
    }

    .logo {
        width: 100px;
        height: 100px;
        margin-bottom: -100px;
    }

    .b1 {

        margin-left: 100px;
    }

    .b2 {
        margin-left: 50px;
        margin-top: 25px;
    }

    .b3 {
        margin-left: 70px;
        margin-top: 2px;
    }

    hr {
        margin-top: 5px;

    }

    p {
        margin-bottom: 1px;
    }

    @page {
        size: A4;
        margin: 0;
        transform: scale(.7);
    }

    .tes {
        width: 89%;
        margin: 0 auto;
    }

</style>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-print-none">
                <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
            </div>
            <div class="card-body">
                <div class="row" style="display: flex;">
                    <div class="b1">
                        <img src="<?php echo base_url() ?>assets/images/logo-kemenkumham.png" class="logo">
                    </div>
                    <div class="b2" style="text-align: center;">
                        <p>KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA RI</p>
                        <h4>BALAI PEMASYARAKATAN (BAPAS) KELAS II PEKANBARU</h4>
                        <p>Jalan Candra Dimuka No.1 Telp. (0761) 65322 - Fax. (0761) 65322</p>
                        <p>P E K A N B A R U - 28294</p>
                        <p>Email : <a href="">bapaspku@gmail.com</a></p>
                    </div>
                </div>
                <hr style="width: 80%;border:2px solid black;background-color: black; ">

                <div class="row" style="font-size: 18px;">
                    <div class="tes">
                        <div class="row">
                            <div class="col-12">
                                <p style="text-align: center; text-decoration: underline">SURAT PERINTAH TUGAS</p>
                                <p style="text-align: center">NOMOR: W4.PAS.9.PK.01.05.02. <?=$spt['spt_no_surat']?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row" style="margin: 0 9% 0 9%; font-size: 18px;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <p>Menimbang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                            </div>
                            <div class="col-10">
                                <p>Bahwa untuk kepentingan pelaksanaan Tugas Pembimbing Kemasyarakatan Balai Pemasyarakatan (BAPAS) Kelas II Pekanbaru perlu mengeluarkan surat perintah tugas ini.</p>
                            </div>
                            <div class="col-2">
                                <p>Dasar &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</p>
                            </div>
                            <div class="col-10">
                                <p>1. Kitab Undang-Undang Hukum Pidana.</p>
                                <p>2. Undang-Undang RI Nomor : 12 Tahun 1995 tentang Pemasyarakatan.</p>
                                <p>3. Surat dari Lembaga Pemasyarakatan Kelas IIB Pasir Pengaraian Nomor: W4.PAS.6.PK.04.05-140 &nbsp;&nbsp;&nbsp;&nbsp;tanggal <?=date_indo($spt['spt_tanggal'])?>. Perihal Permintaan Penelitian Kemasyarakatan (Litmas) Atas Nama: </p>
                                <?php
                                foreach ($detail as $key=>$value):
                                ?>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<?=$key+1?>. <?=$value['detail_nama']?></p>
                                <?php
                                endforeach;
                                ?>
                            </div>
                            <div class="col-2">
                                <p>Kepada &emsp;&emsp;&emsp;&emsp;:</p>
                            </div>
                            <div class="col-10">
                                <p>Nama &emsp;&emsp;&emsp;: <?=$user['user_nama']?></p>
                                <p>Nip &emsp;&emsp;&emsp;&emsp;: <?=$user['user_nip']?></p>
                                <p>Jabatan &emsp;&emsp;: <?=$user['user_jabatan']?></p>
                            </div>
                            <div class="col-2">
                                <p>Untuk &nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;:</p>
                            </div>
                            <div class="col-10">
                                <p>1. Melaksanakan Penelitian Kemasyarakatan untuk Usul Pembebasan Bersyarat dan Usul Cuti Bersyarat (CB)</p>
								<p>2. Surat Perintah ini berlaku dari tanggal <?=date_indo($spt['spt_berlaku'])?> s/d Selesai</p>
								<p>3. Melaksanakan Perintah ini dengan seksama dan penuh tanggung jawab</p>
								<p>4. Melaporkan hasil pelaksanaannya kepada atasan langsung</p>
                            </div>
							<div class="col-4">

							</div>
							<div class="col-4">
								<br>
								<p>Pekanbaru, <?=date_indo($spt['spt_berlaku'])?></p>
								<p><br></p>
								<p><br></p>
								<p><br></p>
								<p>Patta Helena</p>
								<p>NIP. 197304211993032001</p>
							</div>
							<div class="col-4">

							</div>
							<div class="col-4">
								<p>Tembusan : </p>
								<p>Ka. Lapas II B Pekanbaru</p>
								<p>Mengetahui : </p>
								<p><br></p>
								<p><br></p>
								<p><br></p>
								<p>(.........................................)</p>
							</div>
                        </div>
                    </div>
                </div>


                <br>
            </div>
        </div>
    </div>
