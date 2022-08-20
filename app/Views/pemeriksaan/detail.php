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
            <th scope="col">Bobot</th>
            <th scope="col">Sex</th>
            <th scope="col">Grade</th>
            <th scope="col">Umur</th>
            <th scope="col">Jenis Sapi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row"><?= $pemeriksaan[0]->eartag ?></th>
            <td><?= $pemeriksaan[0]->bobot ?></td>
            <td><?= $pemeriksaan[0]->sex ?></td>
            <td><?= $pemeriksaan[0]->grade ?></td>
            <td><?= $pemeriksaan[0]->umur ?></td>
            <td><?= $pemeriksaan[0]->jenis_sapi ?></td>
            <td><?= $pemeriksaan[0]->kedatangan ?></td>
            <td><?= $pemeriksaan[0]->gejala ?></td>
            <td><?= $pemeriksaan[0]->no_kandang ?></td>
            <td><?= $pemeriksaan[0]->no_hospital ?></td>
            <td><?= $pemeriksaan[0]->tanggal_masuk ?></td>
            <td><?= $pemeriksaan[0]->tanggal_keluar ?></td>
          </tr>
          <br>


        </tbody>
      </table>




      </table>

      <br> <br>
      <a href="/pemeriksaan/edit/<?= $pemeriksaan[0]->id ?>" class="btn btn-warning">Edit</a>
      <form action="/pemeriksaan/<?= $pemeriksaan[0]->id ?>" method="post" class="d-inline">
          <?= csrf_field(); ?>
           <input type="hidden" name="_method" value="DELETE">
           <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');">Delete</button>
      </form>
      <a href="/pemeriksaan/" button type="button" class="btn btn-secondary">Kembali</a>


    </div>
  </div>
</div>
<?= $this->endSection(); ?>