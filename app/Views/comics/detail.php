<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <h1 class="mb-4">Detail Komik</h1>
        <div class="col">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://picsum.photos/200/100" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $comics['judul']; ?></h5>
                            <p class="card-text"><b><?= $comics['penulis']; ?></b></p>
                            <p class="card-text">
                                <small class="text-muted"><?= $comics['updated_at']; ?></small>
                            </p>

                            <a href="/comics/edit/<?= $comics['slug']; ?>" class="btn btn-secondary">Edit</a>
                            <form class="d-inline" action="/comics/delete/<?= $comics['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>