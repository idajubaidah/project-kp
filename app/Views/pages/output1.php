
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
		margin-bottom: 3px;
	}
	p {
		color: #404F5E;
		font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
		font-size:20px;
		margin: 0;
	}
	i {
		color: #9ABC66;
		font-size: 100px;
		line-height: 200px;
		margin-left:-15px;
	}
	.card {
		/*background: white;*/
		padding: 20px;
		border-radius: 4px;
		box-shadow: 0 2px 3px #C8D0D8;
		display: inline-block;
		margin: 0 auto;
		min-width: 900px;
		margin-bottom: 10px;

	}

	.container {
		min-height: 600px;
	}

	table{
		margin: auto;
	}

	tr{
		text-align : left;
	}
</style>
<div class="container">
	<div class="card">
		<h1>Success</h1> 
		<p>Selamat Pendaftaran Anda Berhasil!</p>
		<hr>
		<p>Silahkan tunjukan bukti pendaftaran ini kepada Petugas Loket Pendaftaran pada hari anda berkunjung. </p>

		<br>
		<table class="table table-borderless">
			<tbody>
				<tr>
					<td>NIK</td>
					<td>: <?= $nik; ?></td>			
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <?= $nama ?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>: <?= $tgl_lahir ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>: <?= $jenis_kelamin ?></td>
				</tr>
				<tr>
					<td>No. Handphone</td>
					<td>: <?= $no_hp ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>: <?= $alamat ?></td>
				</tr>
				<tr>
					<td>Jenis Tes</td>
					<td>: <?= $jenis_tes ?></td>
				</tr>
				<tr>
					<td>Tanggal Tes</td>
					<td>: <?= $tgl_tes ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
