<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white shadow mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Home') ? 'active' : '' ?>" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'About Me') ? 'active' : '' ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Contact Us') ? 'active' : '' ?>" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Comics') ? 'active' : '' ?>" href="/comics">Comics</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>