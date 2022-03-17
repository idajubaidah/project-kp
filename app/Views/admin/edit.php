<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
			<input type="text" value="<?= $register['jenis_kelamin']; ?>" name="jenis_kelamin" required class="form-control ">
		</div>
		<!-- <div class="form-group">
			<label for="">Jenis Kelamin</label>
			<select class="form-control " name="jenis_kelamin">
				<option>Pilih Jenis Kelamin</option>
				<option value="perempuan" <?= ($register['jenis_kelamin'] === "perempuan" ? "selected" : ""); ?>>Perempuan</option>
				<option value="laki-laki" <?= ($register['jenis_kelamin'] === "laki-laki" ? "selected" : ""); ?>>Laki-laki</option>
			</select>

		</div> -->
		<div class="form-group">
			<label for="">Satuan Kerja</label>
			<select class="form-select form-control" name="satuan_kerja" id="satuan_kerja" required>
				<option selected>Satuan Kerja</option>
				<?php
				foreach($satuan_kerja as $row) { ?>
					<option value="<?= $row['kd_satuan_kerja'] ?> "><?= $row['satuan_kerja'];  ?></option>;
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="">Unit Kerja</label>
			<select class="form-select form-control" name="unit_kerja" id="unit_kerja" class="valid">
				<option value="">Unit Kerja</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Tanggal Tes</label>
			<input type="date" value="<?= $register['tgl_tes']; ?>" name="tgl_tes" required class="form-control">
		</div>
		<div class="form-group">
			<label for="">Jenis Tes</label>
			<input type="text" value="<?= $register['jenis_tes']; ?>" name="jenis_tes" required class="form-control">
		</div>
		<!-- <div class="form-group">
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
		</div> -->
		<input type="hidden" value="<?= $register['id']; ?>" name="id">
		<div class="text-right">
			<button class="btn btn-success">Update</button>
		</div>
	</form>

</div>
</div>
</div>

<script>
	$(document).ready(function() {
		$('#satuan_kerja').change(function() {
			var kd_satuan_kerja = $('#satuan_kerja').val();

			var action = 'get_unitKerja';

			if (kd_satuan_kerja != '')
			{
				$.ajax({
					url: "<?php echo base_url('/admin/action'); ?>",
					method: "POST",
					data:{kd_satuan_kerja:kd_satuan_kerja, action:action},
					dataType: "JSON",
					success:function(data)
					{
						var html = '<option selected>Unit Kerja</option>';

						for(var count = 0; count < data.length; count++)
						{
							html += '<option value="'+data[count].kd_unit_kerja+'">'+data[count].unit_kerja+'</option>';
						}

						$('#unit_kerja').html(html);
					}
				});
			} else 
			{
				$('$unit_kerja').val('');
			}
		});
	});

</script>

<?= $this->endSection(); ?>