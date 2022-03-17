<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Pendaftaran Antigen & PCR">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
	<link href="<?= base_url('css/main.css') ?>" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">
				<img src="<?= base_url('img/logo.svg') ?>" alt="" width="100" height="60" class="d-inline-block align-text-top">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/" style="color:#000">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/register/cari" style="color:#000">Daftar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="s009">
		<form action="/register/daftar" method="post">
			<div class="inner-form">
				<div class="advance-search">
					<span class="desc text-center">HASIL PENCARIAN</span>
					<div class="row third" style="margin:auto">
						<div class="mb-3 row">
							<label for="staticNik" class="col col-form-label">NIK</label>
							<div class="col">
								<input type="number" name="nik" readonly class="form-control-plaintext" id="staticNik" value="<?= $dataHasil['nik']; ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="staticNama" class="col col-form-label">Nama</label>
							<div class="col">
								<input type="text" name="nama" readonly class="form-control-plaintext" id="staticNama" value="<?= $dataHasil['nama']; ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="staticTgl_lahir" class="col col-form-label">Tanggal Lahir</label>
							<div class="col">
								<input type="date" name="tgl_lahir" readonly class="form-control-plaintext" id="staticTgl_lahir" value="<?= $dataHasil['tgl_lahir']; ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="staticNo_hp" class="col col-form-label">No. Handphone</label>
							<div class="col">
								<input type="text" name="no_hp" readonly class="form-control-plaintext" id="staticNo_hp" value="<?= $dataHasil['no_hp']; ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="staticAlamat" class="col col-form-label">Alamat</label>
							<div class="col">
								<input type="text" name="alamat" readonly class="form-control-plaintext" id="staticAlamat" value="<?= $dataHasil['alamat']; ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="staticJenis_kelamin" class="col col-form-label">Jenis Kelamin</label>
							<div class="col">
								<input type="text" name="jenis_kelamin" readonly class="form-control-plaintext" id="staticAlamat" value="<?= $dataHasil['jenis_kelamin']; ?>">
							</div>
						</div>						
						<div class="mb-3 row">
							<label for="staticTgl_tes" class="col col-form-label">Tanggal Tes</label>
							<div class="col">
								<input type="date" name="tgl_tes" class="form-control-plaintext" id="staticTgl_tes" value="">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="staticJenis_tes" class="col col-form-label">Jenis Tes</label>
							<div class="col" >
								<div class="form-check form-check-inline" value="">
									<input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="pcr">
									<label class="form-check-label" for="inlineRadio1">PCR</label>
								</div> 
								<div class="form-check form-check-inline " value="">
									<input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="antigen">
									<label class="form-check-label" for="inlineRadio2">Antigen</label>
								</div>
							</div>
						</div>
						<div class="mb-3 row">
							<button type="submit" class="btn btn-primary my-3">Daftar</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script src="js/extention/choices.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	</html>
