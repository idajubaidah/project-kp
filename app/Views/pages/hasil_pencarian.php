<?= $this->extend('layout/template'); ?>

<?= $this->section('content');?>
<style type="text/css">
  /*PAGES REGISTRASI*/
  a {
    text-decoration: none;
    color: #fff;
  }
  .main {
    border: 1px black solid;
    width: 70%;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 25px;
    border-radius: 3px;
  }
  .col-4{
    border-top-left-radius: 3px;
    background-color: #17D7A0;
  }
  .formulir{
    margin-left: 5%;
    margin-top: 15px;
  }

</style>
<div class="container main">
  <div class="row" id="wrapper">
    <div class="col pb-3" style="align-content: center;">
      <div class="formulir">
        <h4>Form Pendaftaran Tes PCR dan Antigen</h4>
        <form method="post">
          <div class="form-group mb-3 row mt-4">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik" name="nik">
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select class=" form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="perempuan">Perempuan</option>
                <option value="laki-laki">Laki-laki</option>
              </select>
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="no_hp" class="col-sm-2 col-form-label">No. Handphone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="no_hp" name="no_hp">
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="jenis_tes" class="col-sm-2 col-form-label">Jenis Tes</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="pcr">
                <label class="form-check-label" for="inlineRadio1">PCR</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_tes" id="jenis_tes" value="antigen">
                <label class="form-check-label" for="inlineRadio2">Antigen</label>
              </div>
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="tgl_tes" class="col-sm-2 col-form-label">Tanggal Pelaksanaan Tes</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tgl_tes" name="tgl_tes">
            </div>
          </div>
          <button type="submit" class="btn btn-outline-primary">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


<?= $this->endSection(); ?>