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
						<a class="nav-link" href="/register/registrasi" style="color:#000">Daftar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="s009">
		<form action="/register/pencarian" method="get">
			<div class="inner-form">
				<div class="basic-search">
					<div class="input-field input-group">
						<input id="search" type="text" placeholder="Masukan NIK Anda.." / name="nik">
						<input id="search" type="text" placeholder="Masukan KD Anda.." / name="kd">
						<div class="icon-wrap">
							<button class="btn" type="submit" id="button-addon2"><svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
							</svg></button>
							
						</div>
					</div>
				</div>
				<!-- <div class="advance-search">
					<span class="desc">HASIL PENCARIAN</span>
					<div class="row">

					</div>
					<div class="row third">
						<div class="input-field">
							<div class="result-count">
								<div class="group-btn">
									<button class="btn-search">SEARCH</button>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</form>
		</div>
		<script src="js/extention/choices.js"></script>
		<script>
			const customSelects = document.querySelectorAll("select");
			const deleteBtn = document.getElementById('delete')
			const choices = new Choices('select',
			{
				searchEnabled: false,
				itemSelectText: '',
				removeItemButton: true,
			});
			deleteBtn.addEventListener("click", function(e)
			{
				e.preventDefault()
				const deleteAll = document.querySelectorAll('.choices__button')
				for (let i = 0; i < deleteAll.length; i++)
				{
					deleteAll[i].click();
				}
			});

		</script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	</html>
