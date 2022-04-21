<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="jumbotron" id="jumbotron">
    <div class="container">
        <div class="row">
            <div class="class">
                <h2 class="my-3"> Form Ubah Data Komik</h2>
              
                <form action="/komik/update/<?= $komik['id']; ?>" method="post">
                    <?= csrf_field(); ?> 
                    <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? 
      old('judul') : $komik['judul'];    ?>">
    <div id="validationServer03Feedback" class="invalid-feedback">
      <?= $validation->getError('judul'); ?>
    </div>
  </div>
  <div class="form-group">
    <label for="penulis">Penulis</label>
    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? 
      old('penulis') : $komik['penulis'];    ?>">
  </div>
  <div class="form-group">
    <label for="penerbit">Penerbit</label>
    <input type="text" class="form-control" id="penerbit" name="penerbit"  value="<?= (old('penerbit')) ? 
      old('penerbit') : $komik['penerbit'];    ?>">
  </div>
  <div class="form-group">
    <label for="sampul">Sampul</label>
    <input type="text" class="form-control" id="sampul" name="sampul"  value="<?= (old('sampul')) ? 
      old('sampul') : $komik['sampul'];    ?>">
  </div>
  <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
            </div>
        </div>
    </div>


</section>

<?= $this->endSection(); ?>