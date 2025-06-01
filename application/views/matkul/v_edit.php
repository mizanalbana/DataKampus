<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h3 class="card-title mb-0">Edit Data Mata Kuliah</h3>
    </div>
    <div class="card-body">
      <?php foreach($matkul as $u) { ?>
        <form action="<?= base_url('index.php/matkul/update'); ?>" method="post">
          <input type="hidden" name="id" value="<?= $u->id ?>">

          <div class="mb-3">
            <label for="nama_matkul" class="form-label">Nama Matkul</label>
            <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" value="<?= $u->nama_matkul ?>" required>
          </div>

          <div class="mb-3">
            <label for="kode_matkul" class="form-label">Kode Matkul</label>
            <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" value="<?= $u->kode_matkul ?>" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      <?php } ?>
    </div>
  </div>
</div>
