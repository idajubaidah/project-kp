<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style type="text/css">
	body {
		background-color: #f9f6f1;
	}
</style>
<div class="container mb-5"> 
	<div class="row">
		<div class="col-4 pr-3">
			<div class="image-holder">
				<img src="<?= base_url('images/8.jpg') ?>" width="40%" alt="" class="inner-image mr-3">
			</div>
		</div>
		<div class="col-8" style="background-color:#fff;" >
			<h2 class="my-3">Form Pendaftaran Tes PCR dan Antigen</h2>
			<form action="/register/daftar" method="post">
				<?= csrf_field(); ?>
				<div class="row mb-3">
					<label for="nik" class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10 form-holder">
						<input type="number" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" autofocus value="<?= old('nik'); ?>">
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('nik'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10 form-holder">
						<input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('nama'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10 form-holder">
						<input type="date" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="tgl_lahir" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>">
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('tgl_lahir'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10 form-holder">
						<select id="jenis_kelamin" class="form-select form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
							<option selected>Pilih Jenis Kelamin</option>
							<option value="perempuan">Perempuan</option>
							<option value="laki-laki">Laki-laki</option>
						</select>
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('jenis_kelamin'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="no_hp" class="col-sm-2 col-form-label">No. Handphone</label>
					<div class="col-sm-10 form-holder">
						<input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" minlength="11" maxlength="13" value="<?= old('no_hp'); ?>">
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('no_hp'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10 form-holder">
						<input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('alamat'); ?>
						</div>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="jenis_tes" class="col-sm-2 col-form-label">Jenis Tes</label>
					<div class="col-sm-10 form-holder">
						<div class="form-check form-check-inline <?= ($validation->hasError('jenis_tes')) ? 'is-invalid' : ''; ?>" value="<?= old('jenis_tes'); ?>">
							<input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="pcr">
							<label class="form-check-label" for="inlineRadio1">PCR</label>
						</div>
						<div class="form-check form-check-inline <?= ($validation->hasError('jenis_tes')) ? 'is-invalid' : ''; ?>" value="<?= old('jenis_tes'); ?>">
							<input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="antigen">
							<label class="form-check-label" for="inlineRadio2">Antigen</label>
						</div>
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('jenis_tes'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="tgl_tes" class="col-sm-2 col-form-label">Tanggal Pelaksanaan Tes</label>
					<div class="col-sm-10 form-holder">
						<input type="date" class="form-control" id="tgl_tes" name="tgl_tes" <?= ($validation->hasError('tgl_tes')) ? 'is-invalid' : ''; ?> value="<?= old('tgl_tes'); ?>" placeholder="Tanggal Tes">
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							<?= $validation->getError('tgl_tes'); ?>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary my-3">Daftar</button>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>