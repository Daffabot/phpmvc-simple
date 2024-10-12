<div class="container m-4">
<ul class="list-group">
<?php foreach ($data['student'] as $row) : ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $row['nama_siswa']; ?>
    <span class="badge text-bg-info rounded-pill"><a href="<?= BASEURL; ?>/bio/detail/<?= $row['id_siswa']; ?>" class="text-white text-decoration-none">Detail</a></span>
  </li>
<?php endforeach; ?>
</ul>
</div>