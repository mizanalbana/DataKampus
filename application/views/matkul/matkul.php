   <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Matkul</h3></div>
              <div class="col-sm-6 text-end">
                    <a href="<?php echo base_url('matkul/tambah'); ?>" class="btn btn-primary">Tambah Matkul</a>
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
            <th>Nama Matkul</th>
            <th>Kode Matkul</th>
            <th>Action</th>
        </tr>
        <?php
            $no = 1;
            foreach($matkul as $u){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_matkul ?></td>
            <td><?php echo $u->kode_matkul ?></td>
            <td>
              <a href="<?php echo base_url('matkul/edit/'.$u->id); ?>" class="btn btn-sm btn-primary">Edit</a>
              <a href="<?php echo base_url('matkul/hapus/'.$u->id); ?>" class="btn btn-sm btn-danger">Hapus</a>
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
     