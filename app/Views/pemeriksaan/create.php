<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Pemeriksaan</h2>

            <form action="/pemeriksaan/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class=" row mb-3">
                    <label for="bobot" class="col-sm-3 col-form-label">Bobot Sapi : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('bobot')) ? 'is-invalid' : ''; ?>" id="bobot" name="bobot" value="<?= old('bobot'); ?>">
                    </div>
                </div>

                <div class=" row mb-3">
                    <label for="sex" class="col-sm-3 col-form-label">Sex : </label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('sex')) ? 'is-invalid' : ''; ?>" id="sex" name="sex" value="<?= old('sex'); ?>">
                            <option>....pilih....</option>
                            <option>Jantan</option>
                            <option>Betina</option>
                        </select>
                    </div>
                </div>


                <div class=" row mb-3">
                    <label for="grade" class="col-sm-3 col-form-label">Grade Sapi : </label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control <?= ($validation->hasError('grade')) ? 'is-invalid' : ''; ?>" id="grade" name="grade" value="<?= old('grade'); ?>">
                            <option>....pilih....</option>
                            <option>A+</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="umur" class="col-sm-3 col-form-label">Umur Sapi : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('umur')) ? 'is-invalid' : ''; ?>" id="umur" name="umur" value="<?= old('umur'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="jenis_sapi" class="col-sm-3 col-form-label">Jenis Sapi : </label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control <?= ($validation->hasError('jenis_sapi')) ? 'is-invalid' : ''; ?>" id="jenis_sapi" name="jenis_sapi" value="<?= old('jenis_sapi'); ?>">
                            <option>....pilih....</option>
                            <option>Belgian Blue</option>
                            <option>Galian Blonde</option>
                            <option>White Brahman</option>
                            <option>Wagyu</option>
                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="kedatangan" class="col-sm-3 col-form-label">Kedatangan ke : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kedatangan')) ? 'is-invalid' : ''; ?>" id="kedatangan" name="kedatangan" value="<?= old('kedatangan'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="gejala" class="col-sm-3 col-form-label">Gejala : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('gejala')) ? 'is-invalid' : ''; ?>" id="gejala" name="gejala" value="<?= old('gejala'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="no_kandang" class="col-sm-3 col-form-label">Dari Kandang : </label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('no_kandang')) ? 'is-invalid' : ''; ?>" id="no_kandang" name="no_kandang" value="<?= old('no_kandang'); ?>">
                            <option>....pilih....</option>
                            <option>A1</option>
                            <option>A2</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>A4</option>
                            <option>A5</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>B3</option>
                            <option>B4</option>
                            <option>B5</option>
                            <option>C1</option>
                            <option>C2</option>
                            <option>C3</option>
                            <option>C4</option>
                            <option>C5</option>
                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="no_hospital" class="col-sm-3 col-form-label">No Hospital : </label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('no_hospital')) ? 'is-invalid' : ''; ?>" id="no_hospital" name="no_hospital" value="<?= old('no_hospital'); ?>">
                            <option>....pilih....</option>
                            <option>D2</option>
                            <option>H1</option>

                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk : </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_masuk')) ? 'is-invalid' : ''; ?>" id="tanggal_masuk" name="tanggal_masuk" value="<?= old('tanggal_masuk'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="tanggal_keluar" class="col-sm-3 col-form-label">Tanggal Keluar : </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_keluar')) ? 'is-invalid' : ''; ?>" id="tanggal_keluar" name="tanggal_keluar" value="<?= old('tanggal_keluar'); ?>">
                    </div>
                </div>


                <button type=" submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>