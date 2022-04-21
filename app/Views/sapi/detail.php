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
            <th scope="row"><?= $sapi[0]->eartag ?></th>
            <td><?= $sapi[0]->bobot ?></td>
            <td><?= $sapi[0]->sex ?></td>
            <td><?= $sapi[0]->grade ?></td>
            <td><?= $sapi[0]->umur ?></td>
            <td><?= $sapi[0]->jenis_sapi ?></td>
          </tr>
          <br>


        </tbody>
      </table>



      <h3>Hospital Pen</h3>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nomor Asal Kandang</th>
            <th scope="col">Kedatangan</th>
            <th scope="col">Hospital Pen</th>
            <th scope="col">jenis Hospital Pen</th>
            <th scope="col">Kapasitas Hospital Pen</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row"><?= $sapi[0]->id_kandang_pen ?></th>
            <td><?= $sapi[0]->kedatangan ?></td>
            <td><?= $sapi[0]->id_hospital_pen ?></td>
            <td><?= $sapi[0]->jenis_hospital_pen ?></td>
            <td><?= $sapi[0]->kapasitas_hospital_pen ?></td>
          </tr>

        </tbody>
      </table>

      <br>

      <tbody>

        <tr>
          <th scope="row"><?= $sapi[0]->id_kandang_pen ?></th>
          <td><?= $sapi[0]->kedatangan ?></td>
          <td><?= $sapi[0]->id_hospital_pen ?></td>
          <td><?= $sapi[0]->jenis_hospital_pen ?></td>
          <td><?= $sapi[0]->kapasitas_hospital_pen ?></td>
        </tr>

      </tbody>
      </table>

      <br>
      <h3>Pegawai</h3>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="row">ID Pegawai :</th>
            <td><?= $sapi[0]->id_pegawai ?></td>
          </tr>
          <tr>
            <th scope="row">Nama Pegawai :</th>
            <td><?= $sapi[0]->nama_pegawai ?></td>
          </tr>
          <tr>
            <th scope="row">Username :</th>
            <td><?= $sapi[0]->username ?></td>
          </tr>

          </tbody>
      </table>






      <!-- <table class="table">
            <tbody>
              <tr>
                <th scope="row">Ear Tag :</th>
                <td>93</td>
              </tr>
              <tr>
                <th scope="row">Sex :</th>
                <td>Jantan</td>
              </tr>
              <tr>
                <th scope="row">Bobot sapi :</th>
                <td>120 Kg</td>
              </tr>
              <tr>
                <th scope="row">Status Kesehatan :</th>
                <td>Sakit</td>
              </tr>
              <tr>
                <th scope="row">Gejala :</th>
                <td>Mata Merah</td>
              </tr>
              <tr>
                <th scope="row">Kedatangan :</th>
                <td>8</td>
              </tr>
              <tr>
                <th scope="row">Nama Pengurus :</th>
                <td>Dadang</td>
              </tr>
              <tr>
                <th scope="row">Dari Kandang :</th>
                <td>A1</td>
              </tr>
              <tr>
                <th scope="row">Hospital pen :</th>
                <td>f2</td>
              </tr>
              <tr>
                <th scope="row">Jenis Pakan :</th>
                <td>Rumput</td>
              </tr>
              <tr>
                <th scope="row">Jumlah Pakan :</th>
                <td>85/85</td>
              </tr>
              <tr>
                <th scope="row">Pengobatan :</th>
                <td>Pemberian salep mata langsung pada mata yang sakit, memakai sulfathiazole 5%, zinc sulfat 2,5%, salep bacitrasin (R282), atau campuran anti bakterial lokan dan anestesial lokal.</td>
              </tr>
              <tr>
                <th scope="row">Tgl Masuk :</th>
                <td>01 - 01 - 2022</td>
              </tr>
              <tr>
                <th scope="row">Batas Keluar :</th>
                <td>15 - 01 - 2022</td>
              </tr>
           
          </table> -->
      <!-- <button type="button" class="btn btn-success">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button> -->
      <br> <br>
      <a href="/sapi/index" button type="button" class="btn btn-secondary">Kembali</a>
      <a href="/kesehatan/<?= $sapi[0]->eartag ?>" class="btn btn-success">KESEHATAN</a>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>