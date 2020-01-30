<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Form Edit</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?= site_url('kondisi/edit') ?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kondisi">Nama kondisi</label>
                                <input type="hidden" id="id" name="id" value="<?= $kondisi->id_kondisi ?>">
                                <input type="text" class="form-control" name="kondisi" id="kondisi" value="<?= $kondisi->kondisi ?>" placeholder="Nama kondisi">
                                <?php if (form_error('kondisi')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= form_error('kondisi') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="ket">Keterangan</label>
                                <textarea class="form-control" name="ket" id="ket" cols="30" rows="3"><?= $kondisi->ket_kondisi ?></textarea>
                            </div>
                            <div class="form-group">
                                <a href="<?= site_url('kondisi') ?>" class="btn btn-info float-left">Kembali</a>
                                <button class="btn btn-success float-right" type="submmit">Simpan</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>