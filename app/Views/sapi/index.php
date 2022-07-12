  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <!-- Jumbotron
  <section class="jumbotron" id="jumbotron"> -->
  <div class="container ">

    <center>
      <h2 class="mt-2">Catatan Pemeriksaan Rutin Sapi</h2>
    </center>

    <br>
    <center>
      <h2>Daftar Sapi</h2>
    </center><br>

    <div class="row">
      <div class="col-6">
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Eartag Sapi  " name="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" name="submit">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="row">
      <div class="col-5">
        <a href="/sapi/create" class="btn btn-primary mt-2">Tambah Data Pemeriksaan</a>
        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>



    <br>

    <table class="table table-sm table-bordered">

      <!-- Table -->
      </thead>
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Ear Tag</th>
          <th scope="col">Bobot</th>
          <th scope="col">Sex</th>
          <th scope="col">Detail</th>
        </tr>

      <tbody>
        <?php $i = 1
          /** + (10 * ($currentPage - 1))**/
        ; ?>
        <?php foreach ($sapi as $s) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $s['id'] ?></td>

            <td>
              <a href="/detail/<?= $s['id'] ?>" class="btn btn-primary">Detail Sapi</a>

            </td>
          </tr>
        <?php endforeach;  ?>
      </tbody>
    </table>


  </div>
  </div>
  </div>
  <!-- </section> -->
  <?= $this->endSection(); ?>