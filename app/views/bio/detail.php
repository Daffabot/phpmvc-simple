<div class="container-fluid m-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['student']['nama_siswa']; ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['student']['kelas']; ?> <?= $data['student']['jurusan']; ?></h6>
    <p class="card-text"><?= $data['student']['tanggal_lahir']; ?></p>
    <p class="card-text"><?= $data['student']['tempat_lahir']; ?></p>
    <p class="card-text"><?= $data['student']['agama']; ?></p>
    <a href="<?= BASEURL; ?>/bio" class="card-link">Back</a>
  </div>
</div>
</div>