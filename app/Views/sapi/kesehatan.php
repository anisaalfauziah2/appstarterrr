<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!-- Jumbotron -->
<!-- 
<div class="container">
  <div class="text-center">
    <h2 class="display-22">Kesehatan Sapi</h2>
    <br> -->
<div class="jumbotron" id="home">
  <div class="container">
    <div class="text-center">
      <h2 class="display-22">Detail Kesehatan Sapi</h2>
      <br>

      <!-- Table -->
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">EARTAG :</th>
            <td><b><?= $sapi[0]->eartag ?></b></td>
          </tr>
          <tr>
            <th scope="row">SEX :</th>
            <td><?= $sapi[0]->sex ?></td>
          </tr>
          <tr>
            <th scope="row">KEDATANGAN :</th>
            <td><?= $sapi[0]->kedatangan ?></td>
          </tr>
          <tr>
            <th scope="row">GEJALA :</th>
            <td><?= $sapi[0]->gejala ?></td>
          </tr>
          <tr>
            <th scope="row">NO KANDANG :</th>
            <td><?= $sapi[0]->no_kandang ?></td>
          </tr>
          <tr>
            <th scope="row">NO HOSPITAL :</th>
            <td><?= $sapi[0]->no_hospital ?></td>
          </tr>
          <tr>
            <th scope="row">NAMA PENYAKIT :</th>
            <td><?= $sapi[0]->penyakit ?></td>
          </tr>
          <tr>
            <th scope="row">NAMA OBAT :</th>
            <td><?= $sapi[0]->nama_obat ?></td>
          </tr>

          <tr>
            <th scope="row">JENIS OBAT :</th>
            <td><?= $sapi[0]->jenis_obat ?></td>
          </tr>
          <tr>
            <th scope="row">Tanggal Masuk :</th>
            <td><?= $sapi[0]->tanggal_masuk ?></td>
          </tr>
          <tr>
            <th scope="row">Tanggal Keluar :</th>
            <td><?= $sapi[0]->tanggal_keluar ?></td>
          </tr>
      </table>

      <br> <br>
      <a href="/sapi/index" button type="button" class="btn btn-secondary">Medical Record</a>
      <a href="/sapi/detail/<?= $sapi[0]->id ?>" class="btn btn-info">Detail Sapi</a>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>