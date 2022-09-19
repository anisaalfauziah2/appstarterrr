<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Pemeriksaan</h2>
            <br><br>
            <center>
                <h2> EARTAG : <?= $kesehatan[0]->eartag ?> </th>
                </h2>
            </center>
            <form action="/kesehatan/update/ <?= $kesehatan[0]->id; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class=" row mb-3">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Nama Penyakit : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penyakit')) ? 'is-invalid' : ''; ?>" id="penyakit" name="penyakit" value="<?= (old('penyakit')) ? old('penyakit') :  $kesehatan[0]->penyakit ?>" autofocus>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Nama Obat : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama_obat')) ? 'is-invalid' : ''; ?>" id="nama_obat" name="nama_obat" value="<?= (old('nama_obat')) ? old('nama_obat') :  $kesehatan[0]->nama_obat ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Jenis Obat : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('jenis_obat')) ? 'is-invalid' : ''; ?>" id="jenis_obat" name="jenis_obat" value="<?= (old('jenis_obat')) ? old('jenis_obat') :  $kesehatan[0]->jenis_obat ?>">
                    </div>
                </div>

                <div class=" row mb-3">
                    <label for="sex" class="col-sm-3 col-form-label">Sex : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('sex')) ? 'is-invalid' : ''; ?>" id="sex" name="sex" value="<?= (old('sex')) ? old('sex') :  $kesehatan[0]->sex ?>">
                    </div>
                </div>

                <div class=" row mb-3">
                    <label for="kedatangan" class="col-sm-3 col-form-label">Kedatangan ke : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kedatangan')) ? 'is-invalid' : ''; ?>" id="kedatangan" name="kedatangan" value="<?= (old('kedatangan')) ? old('kedatangan') :  $kesehatan[0]->kedatangan ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="gejala" class="col-sm-3 col-form-label">Gejala : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('gejala')) ? 'is-invalid' : ''; ?>" id="gejala" name="gejala" value="<?= (old('gejala')) ? old('gejala') :  $kesehatan[0]->gejala ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="no_kandang" class="col-sm-3 col-form-label">Nomor Kandang : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('no_kandang')) ? 'is-invalid' : ''; ?>" id="no_kandang" name="no_kandang" value="<?= (old('no_kandang')) ? old('no_kandang') :  $kesehatan[0]->no_kandang ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="no_hospital" class="col-sm-3 col-form-label">No Hospital : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('no_hospital')) ? 'is-invalid' : ''; ?>" id="no_hospital" name="no_hospital" value="<?= (old('no_hospital')) ? old('no_hospital') :  $kesehatan[0]->no_hospital ?>">
                    </div>
                </div>


                <div class=" row mb-3">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk : </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_masuk')) ? 'is-invalid' : ''; ?>" id="tanggal_masuk" name="tanggal_masuk" value="<?= (old('tanggal_masuk')) ? old('tanggal_masuk') :  $kesehatan[0]->tanggal_masuk ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="tanggal_keluar" class="col-sm-3 col-form-label">Tanggal Keluar : </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_keluar')) ? 'is-invalid' : ''; ?>" id="tanggal_keluar" name="tanggal_keluar" value="<?= (old('tanggal_keluar')) ? old('tanggal_keluar') :  $kesehatan[0]->tanggal_keluar ?>">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>