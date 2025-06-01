<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title mb-0 text-white">Tambah Data Kelas</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('index.php/kelas/tambah_aksi'); ?>" method="post">
        <div class="mb-3">
          <label for="nama_kelas" class="form-label">Nama Kelas</label>
          <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" required>
        </div>

        <div class="mb-3">
          <label for="kode_kelas" class="form-label">Kode Kelas</label>
          <input type="text" class="form-control" name="kode_kelas" id="kode_kelas" required>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
