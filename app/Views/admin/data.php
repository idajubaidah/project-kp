<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<form action="" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Masukan keyword pencarian..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<h4 class="card-title" style="text-align: center;">Data Pendaftar Tes PCR & Antigen</h4>
					<a href="/admin/excel" class="btn btn-outline-danger shadow float-right" >Excel</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>NIK</th>
									<th>Nama</th>
									<th>Tanggal Lahir</th>
									<th>No. Handphone</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Satuan Kerja</th>
									<th>Unit Kerja</th>
									<th>Tanggal Tes</th>
									<th>Jenis Tes</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1 + (5 * ($currentPage - 1));
								foreach ($getRegister->getResultArray() as $reg) { ?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $reg['nik']; ?></td>
										<td><?= $reg['nama']; ?></td>
										<td><?= $reg['tgl_lahir']; ?></td>
										<td><?= $reg['no_hp']; ?></td>
										<td><?= $reg['alamat']; ?></td>
										<td><?= $reg['jenis_kelamin']; ?></td>
										<td><?= $reg['satuan_kerja']; ?></td>
										<td><?= $reg['unit_kerja']; ?></td>
										<td><?= $reg['tgl_tes']; ?></td>
										<td><?= $reg['jenis_tes']; ?></td>
										<td>
											<a href="<?= base_url('admin/edit/' . $reg['id']); ?>" class="btn btn-success" data-target="#editModal">
											Edit</a>
											<form action="/admin/<?= $reg['id']; ?>" method="post" class="d-inline">
												<?= csrf_field(); ?>
												<input type="hidden" name="_method" value="DELETE">
												<button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</button>
											</form>
										</td>
									</tr>
									<?php $no++;
								} ?>
							</tbody>
						</table>
						<?= $pager->links('registers', 'admin_pagination'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>





<?= $this->endSection(); ?>