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
                    <label for="kedatangan" class="col-sm-3 col-form-label">Kedatangan ke</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kedatangan')) ? 'is-invalid' : ''; ?>" id="kedatangan" name="kedatangan" value="<?= old('kedatangan'); ?>">
                    </div>
                </div>


                <button type=" submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>