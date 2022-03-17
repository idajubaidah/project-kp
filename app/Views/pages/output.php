<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
	<style>
		body {
			text-align: center;
			background: #f9f6f1;
		}
		h1 {
			color: #88B04B;
			font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
			font-weight: 900;
			font-size: 40px;
			margin-bottom: 5px;
		}
		p {
			color: #404F5E;
			font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
			font-size: 18px;
			margin: 0;
		}
		i {
			color: #9ABC66;
			font-size: 100px;
			line-height: 200px;
			margin-left:-15px;
		}
		.card {
			background: white;
			padding: 30px;
			border-radius: 4px;
			box-shadow: 0 2px 3px #C8D0D8;
			display: inline-block;
			margin: 0 auto;
			width: 70%;
			height: 600px;

		}

		.container {
			height: 630px;
		}

		table{
			margin: auto;
		}

		tr{
			text-align : left;
		}
		label{
			text-align: left;
			margin: auto;
		}
	</style>

	<div class="container">
		<div class="card"> 
			<strong><p>Selamat Pendaftaran Anda Berhasil!</p></strong>
			<hr>
			<p>Silahkan screenshot halaman ini untuk ditunjukkan kepada Petugas Loket Pendaftaran pada hari anda berkunjung! </p>

			<br>
			
			<div class="row justify-content-center">
				<label for="staticNik" class="col col-form-label">NIK</label>
				<label for="staticNik" class="col col-form-label"><?= $nik; ?></label>
				
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Nama</label>
				<label for="staticNama" class="col col-form-label"><?= $nama; ?></label>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Tanggal Lahir</label>
				<label for="staticNama" class="col col-form-label"><?= $tgl_lahir; ?></label>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Jenis Kelamin</label>
				<label for="staticNama" class="col col-form-label"><?= $jenis_kelamin; ?></label>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">No. Handphone</label>
				<label for="staticNama" class="col col-form-label"><?= $no_hp; ?></label>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Alamat</label>
				<label for="staticNama" class="col col-form-label"><?= $alamat; ?></label>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Satuan Kerja</label>
				<?php
				foreach ($satuan_kerja->getResult() as $row) { ?>
    			
				
				<label for="staticNama" class="col col-form-label"><?= $row->satuan_kerja; ?></label>
				<?php } ?>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Unit Kerja</label>
				<?php
				foreach ($unit_kerja->getResult() as $row) { ?>
				<label for="staticNama" class="col col-form-label"><?= $row->unit_kerja; ?></label>
				<?php } ?>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Tanggal Tes</label>
				<label for="staticNama" class="col col-form-label"><?= $tgl_tes; ?></label>
			</div>
			<div class=" row">
				<label for="staticNama" class="col col-form-label">Jenis Tes</label>
				<label for="staticNama" class="col col-form-label"><?= $jenis_tes; ?></label>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>