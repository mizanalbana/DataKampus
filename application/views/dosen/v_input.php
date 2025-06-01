<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title mb-0 text-white">Tambah Data dosen</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('index.php/dosen/tambah_aksi'); ?>" method="post">
        <div class="mb-3">
          <label for="nama_dosen" class="form-label">Nama Dosen</label>
          <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" required>
        </div>

        <div class="mb-3">
          <label for="fakultas" class="form-label">Fakultas</label>
          <input type="text" class="form-control" name="fakultas" id="fakultas" required>
        </div>

        <div class="mb-3">
          <label for="kode_dosen" class="form-label">Kode Dosen</label>
          <input type="text" class="form-control" name="kode_dosen" id="kode_dosen" required>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
