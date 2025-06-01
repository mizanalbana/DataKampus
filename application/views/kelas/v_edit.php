<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h3 class="card-title mb-0">Edit Data Kelas</h3>
    </div>
    <div class="card-body">
      <?php foreach ($kelas as $u) { ?>
        <form action="<?= base_url('index.php/kelas/update'); ?>" method="post">
          <input type="hidden" name="id" value="<?= $u->id ?>">

          <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="<?= $u->nama_kelas ?>" required>
          </div>

          <div class="mb-3">
            <label for="kode_kelas" class="form-label">Kode Kelas</label>
            <input type="text" class="form-control" name="kode_kelas" id="kode_kelas" value="<?= $u->kode_kelas ?>" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      <?php } ?>
    </div>
  </div>
</div>
