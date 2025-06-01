 <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src=<?php echo base_url('assets/assets/img/lambang-unimma.png'); ?>
              alt="AdminLTE Logo"
              class="brand-image opacity-100 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Data Kampus</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >

                
            <li class="nav-item">
                    <a href=<?php echo base_url('page/user');?> class="nav-link <?php if($this->uri->segment(2) == 'user' || $this->uri->segment(1) == 'user') echo 'active'; ?>">
                      <i class="bi-person-fill"></i>
                      <p>User</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=<?php echo base_url('page/mahasiswa');?> class="nav-link <?php if($this->uri->segment(2) == 'mahasiswa' || $this->uri->segment(1) == 'mahasiswa') echo 'active'; ?>">
                      <i class="bi-mortarboard "></i>
                      <p>Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=<?php echo base_url('page/kelas');?> class="nav-link <?php if($this->uri->segment(2) == 'kelas' || $this->uri->segment(1) == 'kelas') echo 'active'; ?>">
                      <i class="bi-building "></i>
                      <p>Kelas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=<?php echo base_url('page/dosen');?> class="nav-link  <?php if($this->uri->segment(2) == 'dosen' || $this->uri->segment(1) == 'dosen') echo 'active'; ?>">
                      <i class="bi-person-badge"></i>
                      <p>Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=<?php echo base_url('page/matkul');?> class="nav-link <?php if($this->uri->segment(2) == 'matkul' || $this->uri->segment(1) == 'matkul') echo 'active'; ?>">
                      <i class="bi-journal-bookmark"></i>
                      <p>Matkul</p>
                    </a>
                  </li>
                
              
              
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->