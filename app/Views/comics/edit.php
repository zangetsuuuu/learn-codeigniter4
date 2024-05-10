<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mb-4">Edit Komik</h1>
            <form action="/comics/update/<?= $comics['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $comics['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $comics['sampul']; ?>">
                <div class="form-group row mb-4">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation) ? 'is-invalid' : '' ?>" id="judul" name="judul" value="<?= old('judul', $comics['judul']); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= ($validation) ? $validation->getError('judul') : '' ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis', $comics['penulis']); ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit', $comics['penerbit']); ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img id="img-preview" src="/img/<?= $comics['sampul']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="sampul" name="sampul" <?= old('sampul', $comics['sampul']); ?>>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-info">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>