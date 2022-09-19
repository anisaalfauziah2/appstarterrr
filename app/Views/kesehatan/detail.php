<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Jumbotron -->

<div class="jumbotron" id="home">
  <div class="container">
    <div class="text-center">
      <h2 class="display-22">Detail Sapi</h2>
      <br>
      <table class="table">
        <thead>
          <tr>

            <th scope="col">Eartag</th>
            <th scope="col">Sex</th>
            <th scope="col">Kedatangan</th>
            <th scope="col">Gejala</th>
            <th scope="col">No Kandang</th>
            <th scope="col">No Hospital</th>
            <th scope="col">Nama Penyakit</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Jenis Obat</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Tanggal keluar</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row"><?= $kesehatan[0]->eartag ?></th>
            <td><?= $kesehatan[0]->sex ?></td>
            <td><?= $kesehatan[0]->kedatangan ?></td>
            <td><?= $kesehatan[0]->gejala ?></td>
            <td><?= $kesehatan[0]->no_kandang ?></td>
            <td><?= $kesehatan[0]->no_hospital ?></td>
            <td><?= $kesehatan[0]->penyakit ?></td>
            <td><?= $kesehatan[0]->nama_obat ?></td>
            <td><?= $kesehatan[0]->jenis_obat ?></td>
            <td><?= $kesehatan[0]->tanggal_masuk ?></td>
            <td><?= $kesehatan[0]->tanggal_keluar ?></td>
          </tr>
          <br>


        </tbody>
      </table>




      </table>
      <!-- <button type="button" class="btn btn-success">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button> -->
      <br> <br>
      <a href="/kesehatan/edit/<?= $kesehatan[0]->id ?>" class="btn btn-warning">Edit</a>
      <form action="/kesehatan/detail/<?= $kesehatan[0]->id ?>" method="post" class="d-inline">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');">Delete</button>
      </form>
      <a href="/kesehatan/" button type="button" class="btn btn-secondary">Kembali</a>


    </div>
  </div>
</div>
<?= $this->endSection(); ?>