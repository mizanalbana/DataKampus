  <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Mahasiswa</h3></div>
              <div class="col-sm-6 text-end">
                    <a href="<?php echo base_url('mahasiswa/tambah'); ?>" class="btn btn-primary">Tambah Mahasiswa</a>
                </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="card mb-4">
                  
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th >No</th>
      <th>Nama</th>
      <th>NPM</th>
      <th>Prodi</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach ($mahasiswa as $u): ?>
    <tr class="align-middle">
      <td><?php echo $no++; ?>.</td>
      <td><?php echo $u->nama; ?></td>
      <td><?php echo $u->npm; ?></td>
      <td><?php echo $u->prodi; ?></td>
      <td><?php echo $u->alamat; ?></td>
      <td><?php echo $u->email; ?></td>
      <td>
        <a href="<?php echo base_url('mahasiswa/edit/'.$u->id); ?>" class="btn btn-sm btn-primary">Edit</a>
        <a href="<?php echo base_url('mahasiswa/hapus/'.$u->id); ?>" class="btn btn-sm btn-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
        <!--end::App Content-->
      