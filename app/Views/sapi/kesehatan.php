<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



    <!-- Jumbotron -->
  
    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <h2 class="display-22">Kesehatan Sapi</h2>
         <br>
       

          <table class="table">
            <tbody>
              <tr>
                <th scope="row">EARTAG :</th>
                <td><b><?= $sapi[0]->eartag ?></b></td>
              </tr>
              <tr>
                <th scope="row">ID Pemeriksaan :</th>
                <td><?= $sapi[0]->id_pemeriksaan ?></td>
              </tr>
              <tr>
                <th scope="row">ID Penyakit :</th>
                <td><?= $sapi[0]->id_penyakit ?></td>
              </tr>
              <tr>
                <th scope="row">Nama Penyakit :</th>
                <td><?= $sapi[0]->nama_penyakit ?></td>
              </tr>
              <tr>
                <th scope="row">Gejala Penyakit :</th>
                <td><?= $sapi[0]->gejala_penyakit ?></td>
              </tr>
              <tr>
                <th scope="row">Pengobatan :</th>
                <td><?= $sapi[0]->pengobatan ?></td>
              </tr>
              <tr>
                <th scope="row">ID Obat :</th>
                <td><?= $sapi[0]->id_obat ?></td>
              </tr>
              <tr>
                <th scope="row">Nama Obat :</th>
                <td><?= $sapi[0]->nama_obat ?></td>
              </tr>
              <tr>
                <th scope="row">Jenis Obat :</th>
                <td><?= $sapi[0]->jenis_obat ?></td>
              </tr>
              <tr>
                <th scope="row">Hospital pen :</th>
                <td><?= $sapi[0]->id_hospital_pen ?></td>
              </tr>
              <tr>
                <th scope="row">Tanggal Masuk :</th>
                <td><?= $sapi[0]->tgl_masuk ?></td>
              </tr>
              <tr>
                <th scope="row">Tanggal Keluar :</th>
                <td><?= $sapi[0]->tgl_keluar ?></td>
              </tr>
              
           
          </table>
          <!-- <button type="button" class="btn btn-success">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button> -->
          <br> <br>
          <a href="/sapi/index" button type="button" class="btn btn-secondary">Kembali</a>
          <a href="/detail/<?= $sapi[0]->eartag ?>" class="btn btn-info">Detail Sapi</a>
          
        </div>
      </div>
    </div>
    <?= $this->endSection(); ?>

