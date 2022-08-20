  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">


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

    <!-- <div class="row">
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
    </div> -->



    <div class="row">
      <div class="col-5">
        <a href="/pemeriksaan/create" class="btn btn-primary mt-2">Tambah Data Pemeriksaan</a>
        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>



    <br>

    <table class="table table-sm table-bordered" id="tabelpemeriksaan">

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
        <?php foreach ($pemeriksaan as $p) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $p['eartag'] ?></td>
            <td><?= $p['bobot'] ?></td>
            <td><?= $p['sex'] ?></td>
            <td>
              <a href="/pemeriksaan/<?= $p['id'] ?>" class="btn btn-primary">Detail Sapi</a>

            </td>
          </tr>
        <?php endforeach;  ?>
      </tbody>

    </table>


  </div>
  </div>
  </div>


  <?= $this->endSection(); ?>
  <?= $this->section('custom-js'); ?>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabelpemeriksaan').DataTable();
    });
  </script>
  <!-- </section> -->
  <?= $this->endSection(); ?>