<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Pemeriksaan</h2>

            <form action="/sapi/save" method="post" enctype="multipart/form-data">
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
                    <label for="gejala" class="col-sm-3 col-form-label">Grade Sapi : </label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control <?= ($validation->hasError('gejala')) ? 'is-invalid' : ''; ?>" id="gejala" name="gejala" value="<?= old('gejala'); ?>">
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
                    <label for="gejala" class="col-sm-3 col-form-label">Umur Sapi : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('gejala')) ? 'is-invalid' : ''; ?>" id="gejala" name="gejala" value="<?= old('gejala'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="gejala" class="col-sm-3 col-form-label">Jenis Sapi : </label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control <?= ($validation->hasError('gejala')) ? 'is-invalid' : ''; ?>" id="gejala" name="gejala" value="<?= old('gejala'); ?>">
                            <option>....pilih....</option>
                            <option>Belgian Blue</option>
                            <option>Galian Blonde</option>
                            <option>White Brahman</option>
                            <option>Wagyu</option>
                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="shifmen" class="col-sm-3 col-form-label">Kedatangan ke</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('shifmen')) ? 'is-invalid' : ''; ?>" id="shifmen" name="shifmen" value="<?= old('shifmen'); ?>">
                    </div>
                </div>

                <div class=" row mb-3">
                    <label for="kandang" class="col-sm-3 col-form-label">Dari Kandang : </label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('kandang')) ? 'is-invalid' : ''; ?>" id="kandang" name="kandang" value="<?= old('kandang'); ?>">
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
                    <label for="hospital" class="col-sm-3 col-form-label">No Hospital : </label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('hospital')) ? 'is-invalid' : ''; ?>" id="hospital" name="hospital" value="<?= old('hospital'); ?>">
                            <option>....pilih....</option>
                            <option>D2</option>
                            <option>H1</option>

                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="pengobatan" class="col-sm-3 col-form-label ">Nama Penyakit : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pengobatan')) ? 'is-invalid' : ''; ?>" id="pengobatan" name="pengobatan" value="<?= old('pengobatan'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="pengobatan" class="col-sm-3 col-form-label ">Gejalan Penyakit : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pengobatan')) ? 'is-invalid' : ''; ?>" id="pengobatan" name="pengobatan" value="<?= old('pengobatan'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="pengobatan" class="col-sm-3 col-form-label ">Pengobatan : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pengobatan')) ? 'is-invalid' : ''; ?>" id="pengobatan" name="pengobatan" value="<?= old('pengobatan'); ?>">
                    </div>
                </div>

                <div class=" row mb-3">
                    <label for="tgl" class="col-sm-3 col-form-label">Tanggal Masuk : </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tgl')) ? 'is-invalid' : ''; ?>" id="tgl" name="tgl" value="<?= old('tgl'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="tgl" class="col-sm-3 col-form-label">Tanggal Keluar : </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tgl')) ? 'is-invalid' : ''; ?>" id="tgl" name="tgl" value="<?= old('tgl'); ?>">
                    </div>
                </div>

                <button type=" submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>