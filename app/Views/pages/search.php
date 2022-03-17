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
  <script src="https://kit.fontawesome.com/50a6b5ed9d.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
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
  <div class="wrapper">
    <form action="/register/search" method="post" id="wizard">
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
              <input type="text" placeholder="NIK" class="form-control" id="nik" autofocus value="<?= old('nik'); ?>" name="nik" minlength="16" maxlength="16" required >
              <div class="icon-wrap">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
              </div>
              
            </div>
            <span>Belum pernah mendaftar? <a href="/register/registrasi">Klik disini!</a></span>
          </div>

        </section>

      </form>
    </div>

    <footer style="background-color:#000;">
      <div class="footer-copyright py-1 text-center">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <p class="text-white"> ©2022. | Kementrian Kesehatan. | All rights reserved. </p>
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
