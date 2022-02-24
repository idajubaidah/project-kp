<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
	<a href="<?= base_url('admin'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
	<div class="card">
		<div class="card-header bg-primary text-white">
			<h4 class="card-title">Edit Data Pendaftar</h4>
		</div>
		<div class="card-body">
			<?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
			<form method="post" action="/admin/update/<?= $register['id']; ?>" >
				<?= csrf_field(); ?>
				<div class="form-group">
					<label for="">NIK</label>
					<input type="text" value="<?= $register['nik']; ?>" name="nik" required class="form-control">
				</div>
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" value="<?= $register['nama']; ?>" name="nama" required class="form-control ">
					
				</div>
				<div class="form-group">
					<label for="">Tanggal Lahir</label>
					<input type="date" value="<?= $register['tgl_lahir']; ?>" name="tgl_lahir" required class="form-control">
				</div>
				<div class="form-group">
					<label for="">No. Handphone</label>
					<input type="text" value="<?= $register['no_hp']; ?>" name="no_hp" required class="form-control ">
					
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<input type="text" value="<?= $register['alamat']; ?>" name="alamat" required class="form-control ">
					
				</div>
				<div class="form-group">
					<label for="">Jenis Kelamin</label>
					<select class="form-control " name="jenis_kelamin">
						<option>Pilih Jenis Kelamin</option>
						<option value="perempuan" <?= ($register['jenis_kelamin'] === "perempuan" ? "selected" : ""); ?>>Perempuan</option>
						<option value="laki-laki" <?= ($register['jenis_kelamin'] === "laki-laki" ? "selected" : ""); ?>>Laki-laki</option>
					</select>
					
				</div>
				<div class="form-group">
					<label for="">Tanggal Tes</label>
					<input type="date" value="<?= $register['tgl_tes']; ?>" name="tgl_tes" required class="form-control">
				</div>
				<div class="form-group">
					<label>Jenis Tes</label>
					<div class="form-check ">
						<input class="form-check-input" type="radio" name="jenis_tes" id="flexRadioDefault1" value="pcr"<?php echo ($register['jenis_tes'] == 'pcr' ? ' checked' : ''); ?>>
						<label class="form-check-label" for="flexRadioDefault1">
							PCR
						</label>
					</div>
					<div class="form-check ">
						<input class="form-check-input" type="radio" name="jenis_tes" id="flexRadioDefault2" value="antigen"<?php echo ($register['jenis_tes'] == 'antigen' ? ' checked' : ''); ?>>
						<label class="form-check-label" for="flexRadioDefault2">
							Antigen
						</label>
					</div>
				</div>
				<input type="hidden" value="<?= $register['id']; ?>" name="id">
				<div class="text-right">
					<button class="btn btn-success">Update</button>
				</div>
			</form>

		</div>
	</div>
</div>

<?= $this->endSection(); ?>