<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?> Page</title>
    <script src="<?= BASEURL; ?>/js/script.js" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body x-data>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" x-data="{ title: 'MVC', page1: 'Home' }">
    <a class="navbar-brand" href="<?= BASEURL; ?>/" x-text="title"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/" x-text="page1"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about" x-text="$store.navi.link[0]"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/student" x-text="$store.navi.text"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/bio" x-text="$store.navi.link[1]"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>