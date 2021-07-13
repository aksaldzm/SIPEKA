  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= base_url('assetsLTE/'); ?>img/BPBDclp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light ml-2">SIPEKA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-header">Administrator</li>
                  <?php if ($user['level_id'] == 1) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang1'); ?>" class="nav-link ">
                              <i class="nav-icon fal fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>
                  <?php } else if ($user['level_id'] == 2) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang2'); ?>" class="nav-link ">
                              <i class="nav-icon fal fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>
                  <?php } else if ($user['level_id'] == 3) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang3'); ?>" class="nav-link ">
                              <i class="nav-icon fal fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>
                  <?php } ?>
                  <li class="nav-header">DATA</li>
                  <?php if ($user['level_id'] == 1) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang1/formKegiatan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  Form Kegiatan
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang1/lihatKegiatan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-table"></i>
                              <p>
                                  Tabel Data Kegiatan
                              </p>
                          </a>
                      </li>
                  <?php } else if ($user['level_id'] == 2) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang2/formKegiatan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  Form Kegiatan
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang2/lihatKegiatan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-table"></i>
                              <p>
                                  Tabel Data Kegiatan
                              </p>
                          </a>
                      </li>
                  <?php } else if ($user['level_id'] == 3) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang3/formKegiatan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  Form Kegiatan
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('bidang3/lihatKegiatan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-table"></i>
                              <p>
                                  Tabel Data Kegiatan
                              </p>
                          </a>
                      </li>
                  <?php } ?>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>