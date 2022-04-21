<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="jumbotron" id="jumbotron">
    <div class="container">
        <div class="row">
            <div class="class">
                <h2 class="my-3"> Form Tambah Data Komik</h2>
              
                <form action="/komik/save" method="post">
                    <?= csrf_field(); ?> 
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
    <div id="validationServer03Feedback" class="invalid-feedback">
      <?= $validation->getError('judul'); ?>
    </div>
  </div>
  <div class="form-group">
    <label for="penulis">Penulis</label>
    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
  </div>
  <div class="form-group">
    <label for="penerbit">Penerbit</label>
    <input type="text" class="form-control" id="penerbit" name="penerbit"  value="<?= old('penerbit'); ?>">
  </div>
  <div class="form-group">
    <label for="sampul">Sampul</label>
    <input type="text" class="form-control" id="sampul" name="sampul"  value="<?= old('sampul'); ?>">
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
            </div>
        </div>
    </div>


</section>

<?= $this->endSection(); ?>