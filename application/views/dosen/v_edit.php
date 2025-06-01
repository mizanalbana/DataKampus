<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h3 class="card-title mb-0">Edit Data Dosen</h3>
    </div>
    <div class="card-body">
      <?php foreach ($dosen as $u) { ?>
        <form action="<?= base_url('index.php/dosen/update'); ?>" method="post">
          <input type="hidden" name="id" value="<?= $u->id ?>">

          <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?= $u->nama_dosen ?>" required>
          </div>

          <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" class="form-control" name="fakultas" id="fakultas" value="<?= $u->fakultas ?>" required>
          </div>

          <div class="mb-3">
            <label for="kode_dosen" class="form-label">Kode Dosen</label>
            <input type="text" class="form-control" name="kode_dosen" id="kode_dosen" value="<?= $u->kode_dosen ?>" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      <?php } ?>
    </div>
  </div>
</div>
