<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pendaftaran Tes PCR & Antigen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">

  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- STYLE CSS -->
  <link rel="stylesheet" href="<?= base_url('css/css.css')?>" />
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="<?= base_url('img/logo.svg'); ?>" alt="" width="100" height="60" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/" style="color:#000; font-size: 16px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register/registrasi" style="color:#000; font-size: 16px;">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper pt-3">
    <form action="/register/daftar" method="post" id="wizard">
      <!-- SECTION 1 -->
      <h2></h2>
      <section>
        <div class="inner">
          <div class="image-holder">
            <img src="<?= base_url('images/8.jpg'); ?>" alt="" class="inner-image" height="100%">
          </div>
          <div class="col form-content" >
            <div class="form-header">
              <h3>Pendaftaran Tes PCR & Antigen</h3>
            </div>
            <p>Silahkan isi dengan data diri Anda!</p>
            <div class="form-row">
              <div class="form-holder">
                <input type="number" placeholder="NIK" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" autofocus value="<?= old('nik'); ?>" name="nik">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  <?= $validation->getError('nik'); ?>
                </div>
              </div>
              <div class="form-holder">
                <input type="text" placeholder="Nama Lengkap" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" name="nama">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  <?= $validation->getError('nama'); ?>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder">
                <input placeholder="Tanggal Lahir" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tgl_lahir'); ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="tgl_lahir" name="tgl_lahir" />
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  <?= $validation->getError('tgl_lahir'); ?>
                </div>
              </div>
              <div class="form-holder">
                <input type="text" placeholder="No. Handphone" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" value="<?= old('no_hp'); ?>" name="no_hp">
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder">
                <input type="text" placeholder="Alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>" name="alamat">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  <?= $validation->getError('alamat'); ?>
                </div>
              </div>
              <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                <select id="jenis_kelamin" class="form-select form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" value="<?= old('jenis_kelamin'); ?>" name="jenis_kelamin">
                  <option selected>Pilih Jenis Kelamin</option>
                  <option value="perempuan">Perempuan</option>
                  <option value="laki-laki">Laki-laki</option>
                </select>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  <?= $validation->getError('jenis_kelamin'); ?>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder">
                <input placeholder="Tanggal Tes" class="form-control <?= ($validation->hasError('tgl_tes')) ? 'is-invalid' : ''; ?>" value="<?= old('tgl_tes'); ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="tgl_tes" name="tgl_tes" />
              </div>
              <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
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
            <div class="form-row">
              <button type="submit" class="btn btn-primary my-3">Daftar</button>

            </div>
          </div>

        </div>

      </section>

    </form>
  </div>

  <footer>
    <div class="footer-copyright py-3 bg-dark text-center">
      <div class="footer-copyright-wrapper">
        <p class="footer-copyright-text">
          <p class="text-white" style="font-size: 16px;"> ©2022. | Kementrian Kesehatan. | All rights reserved. </p>
        </p>
      </div>
    </div>

  </footer>

  <!-- JQUERY -->
  <script src="js/jquery-3.3.1.min.js"></script>

  <!-- JQUERY STEP -->
  <script src="js/jquery.steps.js"></script>
  <script src="js/main.js"></script>
  <!-- Template created and distributed by Colorlib -->
</body>
</html>
