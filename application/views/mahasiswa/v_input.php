<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title mb-0 text-white">Tambah Data Mahasiswa</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('index.php/mahasiswa/tambah_aksi'); ?>" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>

        <div class="mb-3">
          <label for="npm" class="form-label">NPM</label>
          <input type="text" class="form-control" name="npm" id="npm" required>
        </div>

        <div class="mb-3">
          <label for="prodi" class="form-label">Prodi</label>
          <input type="text" class="form-control" name="prodi" id="prodi" required>
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
