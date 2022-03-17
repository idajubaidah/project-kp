<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="main">
		<div class="row">
			<div class="col-sm-9">
				<img src="<?= base_url('img/landing.jpg') ?>">
			</div>
			<div class="col-3 mt-3 text-center">
				<h2 class="mb-4">Covid-19 Test</h2>
				<a href="/register/cari" class="btn btn-primary">Daftar Tes</a>
			</div>
		</div>
	</div>
	<div class="second">
		<div class="row">
			<div class="col-4">
				<h2>Layanan Tes Covid-19</h2>
				<p>Kami menyediakan layanan Tes Antigen dan PCR dengan melakukan pendaftaran secara Online.</p>
			</div>
			<div class="col-6">
				<img src="img/1.jpg" id="imageSatu">
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<img src="img/2.jpg" id="imageDua">
			</div>
			<div class="col-4">
				<h2 id="harga">Harga Screening Covid</h2>
				<p id="gratis">Tes PCR dan Antigen yang kami selenggarakan tidak dipungut biaya apapun!</p>
			</div>
		</div>
	</div>
</div>



<?= $this->endSection(); ?>