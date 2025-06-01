
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">User</h3></div>
              <div class="col-sm-6 text-end">
                    <a href="<?php echo base_url('user/tambah'); ?>" class="btn btn-primary">Tambah User</a>
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
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
            $no = 1;
            foreach($users as $u){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo str_repeat('*', strlen($u->password)); ?></td>
            <td>
              <a href="<?php echo base_url('user/edit/'.$u->id); ?>" class="btn btn-sm btn-primary">Edit</a>
              <a href="<?php echo base_url('user/hapus/'.$u->id); ?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        <?php } ?>
  </tbody>
</table>

                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
        <!--end::App Content-->
     