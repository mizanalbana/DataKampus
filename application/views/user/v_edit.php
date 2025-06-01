<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h3 class="card-title mb-0">Edit Data User</h3>
    </div>
    <div class="card-body">
      <?php foreach($users as $u) { ?>
      <form action="<?= base_url('index.php/user/update'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $u->id ?>">

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" value="<?= $u->username ?>" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" value="<?= $u->password ?>" required>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
      <?php } ?>
    </div>
  </div>
</div>
