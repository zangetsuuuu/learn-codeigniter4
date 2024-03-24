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
                            <h5 class="card-title"><?= $comic['judul']; ?></h5>
                            <p class="card-text"><b><?= $comic['author']; ?></b></p>
                            <p class="card-text">
                                <small class="text-muted"><?= $comic['updated_at']; ?></small>
                            </p>

                            <a href="" class="btn btn-secondary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>