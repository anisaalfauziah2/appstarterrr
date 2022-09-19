  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">


  <!-- Jumbotron
  <section class="jumbotron" id="jumbotron"> -->
  <div class="container ">

    <center>
      <h2 class="mt-2">Catatan Kesehatan Rutin Sapi</h2>
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
        <!-- <a href="/kesehatan/create" class="btn btn-primary mt-2">Tambah Data Kesehatan</a> -->
        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>



    <br>

    <table class="table table-sm table-bordered" id="tabelkesehatan">

      <!-- Table -->
      </thead>
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">EarTag</th>
          <th scope="col">Nama Penyakit</th>
          <th scope="col">Gejala</th>
          <th scope="col">Detail</th>
        </tr>

      <tbody>


        <?php $i = 1
          /** + (10 * ($currentPage - 1))**/
        ; ?>
        <?php foreach ($kesehatan as $p) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $p->eartag ?></td>
            <td><?= $p->penyakit ?></td>
            <td><?= $p->gejala ?></td>
            <td>
              <a href="/kesehatan/edit/<?= $p->id ?>" class="btn btn-warning">Edit</a>
              <a href="/kesehatan/detail/<?= $p->id ?>" class="btn btn-primary">Detail Sapi</a>

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
      $('#tabelkesehatan').DataTable();
    });
  </script>
  <!-- </section> -->

  <center>
    <a href="/sapi" class="btn btn-warning mt-2">PEMERIKSAAN</a>
    <a href="/sapi" class="btn btn-primary mt-2">MEDICAL RECORD</a>
  </center><br>

  <?= $this->endSection(); ?>