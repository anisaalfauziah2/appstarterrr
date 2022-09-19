<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

<!-- Jumbotron -->
<!-- <section class="jumbotron" id="datasapi"> -->
<div class="container ">
    <div class="text-center">
        <br>
        <center>
            <h2 class="mt-2">Medical Record Sapi</h2><br><br>
        </center>

        <div class="row">
            <div class="col-5">

            </div>
        </div>

        <!-- Table -->
        <table class="table table-sm table-bordered" id="tabelsapi">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Ear Tag</th>
                    <th scope="col">Nomor Hospital Pen</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($sapi as $s) : ?>
                    <tr>

                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $s->eartag ?></td>
                        <td><?= $s->no_hospital ?></td>
                        <td><?= $s->gejala ?></td>
                        <td>
                            <a href="/sapi/detail/<?= $s->id ?>" class="btn btn-primary">Detail Sapi</a>
                            <a href="/sapi/kesehatan/<?= $s->id ?>" class="btn btn-success">Kesehatan</a>
                        </td>
                    </tr>
                <?php endforeach;  ?>

            </tbody>
        </table>

    </div>
</div>
</div>
</section>
<?= $this->endSection(); ?>
<?= $this->section('custom-js'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#tabelsapi').DataTable();
    });
</script>

<center>
    <a href="/pemeriksaan" class="btn btn-warning mt-2">PEMERIKSAAN</a>
    <a href="/kesehatan" class="btn btn-success mt-2">KESEHATAN</a>
</center><br>
<?= $this->endSection(); ?>