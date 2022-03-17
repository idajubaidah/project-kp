<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pendaftaran Tes PCR & Antigen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">

  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="<?= base_url('fonts/material-design-iconic-font/css/material-design-iconic-font.css') ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
            <a class="nav-link" href="/register/cari" style="color:#000; font-size: 16px;">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper pt-2">
    <form action="/register/daftar" method="post" id="wizard">
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
                <input type="text" placeholder="NIK" class="form-control" id="nik" autofocus value="<?= old('nik'); ?>" name="nik" minlength="11" maxlength="16" required >
              </div>
              <div class="form-holder">
                <input type="text" placeholder="Nama Lengkap" class="form-control" value="<?= old('nama'); ?>" name="nama" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder">
                <input placeholder="Tanggal Lahir" class="form-control" value="<?= old('tgl_lahir'); ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="tgl_lahir" name="tgl_lahir" required />
              </div>
              <div class="form-holder">
                <input type="text" placeholder="No. Handphone" class="form-control" value="<?= old('no_hp'); ?>" name="no_hp" minlength="11" maxlength="13" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder">
                <input type="text" placeholder="Alamat" class="form-control" value="<?= old('alamat'); ?>" name="alamat" required>
              </div>
              <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                <select id="jenis_kelamin" class="form-select form-control" value="<?= old('jenis_kelamin'); ?>" name="jenis_kelamin" required>
                  <option selected>Pilih Jenis Kelamin</option>
                  <option value="Perempuan">Perempuan</option>
                  <option value="Laki-laki">Laki-laki</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
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
              <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                <select class="form-select form-control" name="unit_kerja" id="unit_kerja" class="valid">
                  <option value="">Unit Kerja</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-holder">
                <input placeholder="Tanggal Tes" class="form-control" value="<?= old('tgl_tes'); ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="tgl_tes" name="tgl_tes" />
              </div>
              <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                <div class="form-check form-check-inline" value="<?= old('jenis_tes'); ?>">
                  <input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="PCR">
                  <label class="form-check-label" for="inlineRadio1">PCR</label>
                </div>
                <div class="form-check form-check-inline" value="<?= old('jenis_tes'); ?>">
                  <input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="Antigen">
                  <label class="form-check-label" for="inlineRadio2">Antigen</label>
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

  <script>

      // function dataSatker(){
      //   $('#satker').select2({
      //     ajax: {
      //       dataType: "json",
      //       url: "<?= site_url('register/registrasi') ?>",
      //       data: function(params) {
      //         return {
      //           search: params.term
      //         }
      //       },
      //       processResults: function(data, page) {
      //         return {
      //           results : data
      //         }
      //       }
      //     }
      //   });
      // }

      // DARI YOUTUBE
      // $(document).ready(function(){

      //   $('#satker').change(function(e){

      //     $.ajax({
      //       type:"post",
      //       url:"<?= site_url('/register/action') ?>",
      //       data: {
      //         id_satuan_kerja:$(this).val()
      //       },
      //       dataType: "json",
      //       success: function(response) {
      //         if(response.data){
      //           $('#unit_kerja').html(response.data);
      //           $('#unit_kerja').select2();
      //         }
      //       },
      //       error : function(xhr, thrownError){
      //         alert(xhr.status +"\n"+ xhr.responseText +"\n"+ thrownError);
      //       }
      //     });
      // });
      // });

      // $(document).ready(function() {
      //   //req data unit kerja
      //   $('#satuan_kerja').change(function() {
      //     var id_satuan_kerja = $('#satuan_kerja').val(); //mengambil value dari form satuan kerja

      //     if (id_satuan_kerja != '') {
      //       $.ajax({
      //         url: '<?= base_url('/register/action') ?>',
      //         method: 'POST',
      //         data: {
      //           id_satuan_kerja: id_satuan_kerja
      //         },
      //         success: function(data) {
      //           $('#unit_kerja').html(data)
      //         }
      //       });
      //     }
      //   });

      // });


      $(document).ready(function() {
        $('#satuan_kerja').change(function() {
          var kd_satuan_kerja = $('#satuan_kerja').val();

          var action = 'get_unitKerja';

          if (kd_satuan_kerja != '')
          {
            $.ajax({
              url: "<?php echo base_url('/register/action'); ?>",
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

    <!-- JQUERY -->
    <!-- <script src="<?= base_url('js/jquery-3.3.1.min.js') ?>"></script> -->

    <!-- JQUERY STEP -->
    <!-- <script src="<?= base_url('js/jquery.steps.js') ?>"></script> -->
    <!-- <script src="<?= base_url('js/main.js')?>"></script> -->
    <!-- Template created and distributed by Colorlib -->
  </body>
  </html>
