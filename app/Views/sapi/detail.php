<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!-- Jumbotron -->


<!-- <div class="container">
  <div class="text-center">
    <h2 class="display-22">Detail Sapi</h2>
    <br>
    <table class="table"> -->
<div class="jumbotron" id="home">
  <div class="container">
    <div class="text-center">
      <h2 class="display-22">Detail Sapi</h2>
      <br>
      <table class="table">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Eartag</th>
              <th scope="col">Bobot</th>
              <th scope="col">Sex</th>
              <th scope="col">Grade</th>
              <th scope="col">Umur</th>
              <th scope="col">Jenis Sapi</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($sapi as $s) : ?>
              <tr>
                <th scope="row"><?= $s->eartag ?></th>
                <td><?= $s->bobot ?></td>
                <td><?= $s->sex ?></td>
                <td><?= $s->grade ?></td>
                <td><?= $s->umur ?></td>
                <td><?= $s->jenis_sapi ?></td>
              </tr>
            <?php endforeach;  ?>
            <br>


          </tbody>
        </table>



        <h3>Hospital Pen</h3>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nomor Kandang</th>
              <th scope="col">Kedatangan</th>
              <th scope="col">Hospital Pen</th>
              <th scope="col">Gejala</th>
              <th scope="col">Tanggal Masuk</th>
              <th scope="col">Tanggal Keluar</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($sapi as $s) : ?>
              <tr>
                <th scope="row"><?= $s->no_kandang ?></th>
                <td><?= $s->kedatangan ?></td>
                <td><?= $s->no_hospital ?></td>
                <td><?= $s->gejala ?></td>
                <td><?= $s->tanggal_masuk ?></td>
                <td><?= $s->tanggal_keluar ?></td>
              </tr>
            <?php endforeach;  ?>
          </tbody>
        </table>


        <br> <br>
        <a href="/sapi/index" button type="button" class="btn btn-secondary">MEDICAL RECORD</a>
        <a href="/sapi/kesehatan/<?= $sapi[0]->id ?>" class="btn btn-success">KESEHATAN</a>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>