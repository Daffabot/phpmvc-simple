<div class="container m-4">
<div class="row">
    <div class="col-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
    <h1>List of Student</h1>
    <form action="<?= BASEURL; ?>/student/search" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" placeholder="Search student name" aria-label="Search student name" autocomplete="off" aria-describedby="search">
            <button class="btn btn-primary" type="submit" id="search">Search</button>
        </div>
    </form>
    <table border="1" class="table">
    <tr>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr> <?php foreach ($data['student'] as $row) : ?> <tr>
        <td><?= $row['nama_siswa']; ?></td>
        <td><?= $row['kelas']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['tanggal_lahir']; ?></td>
        <td><?= $row['tempat_lahir']; ?></td>
        <td><?= $row['agama']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td>
            <span class="badge text-bg-warning rounded-pill"><a href="<?= BASEURL; ?>/student/edit/<?= $row['id_siswa']; ?>" class="text-white text-decoration-none edit-modal" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $row['id_siswa']; ?>">Edit</a></span>
            <span class="badge text-bg-danger rounded-pill"><a href="<?= BASEURL; ?>/student/delete/<?= $row['id_siswa']; ?>" class="text-white text-decoration-none" onclick="return confirm('Are you sure want to delete student data?');">Delete</a></span>
        </td>
    </tr> <?php endforeach; ?>
</table>
<button type="button" class="btn btn-primary add-modal" data-bs-toggle="modal" data-bs-target="#formModal">
  Add Student
</button>
</div>

<!-- Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="titleModal">Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/student/add" method="post" class="was-validated row g-3">
        <div class="mb-1">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="John Doe" required>
            <div class="invalid-feedback">
            Please enter a name message in the input.
            </div>
        </div>
        <div class="mb-1">
            <select class="form-select" id="kelas" name="kelas" required aria-label="select major">
            <option value="">Class</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
            </select>
            <div class="invalid-feedback">Class invalid select feedback</div>
        </div>
        <div class="mb-1">
            <select class="form-select" id="jurusan" name="jurusan" required aria-label="select major">
            <option value="">Major</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TO">TO</option>
            <option value="TM">TM</option>
            <option value="KL">KL</option>
            <option value="AK">AK</option>
            <option value="DKV">DKV</option>
            <option value="PS">PS</option>
            <option value="TL">TL</option>
            <option value="MPLB">MPLB</option>
            </select>
            <div class="invalid-feedback">Major invalid select feedback</div>
        </div>
        <div class="mb-1">
            <label for="tanggal_lahir" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            <div class="invalid-feedback">
            Please enter a birth date in the input.
            </div>
        </div>
        <div class="mb-1">
            <label for="tempat_lahir" class="form-label">Birthplace</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Subang" required>
            <div class="invalid-feedback">
            Please enter a birthplace in the input.
            </div>
        </div>
        <div class="mb-1">
            <label for="agama" class="form-label">Religion</label>
            <input type="text" class="form-control" id="agama" name="agama" placeholder="Islam" required>
            <div class="invalid-feedback">
            Please enter a religion in the input.
            </div>
        </div>
        <div class="mb-1">
            <label for="alamat" class="form-label">Address</label>
            <textarea class="form-control" id="alamat" name="alamat" placeholder="Wantilan, Cipeundeuy, Subang, Jawa Barat" required></textarea>
            <div class="invalid-feedback">
            Please enter an address in the textarea.
            </div>
        </div>
        <input type="hidden" name="id_siswa" id="id_siswa">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>