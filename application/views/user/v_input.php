<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title mb-0 ">Tambah Data User</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('index.php/user/tambah_aksi'); ?>" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
