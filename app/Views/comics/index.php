<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-4">Daftar Komik</h1>
                <?php if (session()->getFlashdata('Pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('Pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <a href="/comics/create" class="btn btn-primary mb-3">Tambah Komik</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($comics as $com) : ?>
                        <tr class="align-middle">
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $com['sampul']; ?>" alt=""></td>
                            <td><?= $com['judul']; ?></td>
                            <td><?= $com['penulis']; ?></td>
                            <td><?= $com['penerbit']; ?></td>
                            <td>
                                <a href="/comics/<?= $com['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>