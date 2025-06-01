<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title mb-0">Tambah Data Mata Kuliah</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('index.php/matkul/tambah_aksi'); ?>" method="post">
        <div class="mb-3">
          <label for="nama_matkul" class="form-label">Nama Matkul</label>
          <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" required>
        </div>

        <div class="mb-3">
          <label for="kode_matkul" class="form-label">Kode Matkul</label>
          <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" required>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
