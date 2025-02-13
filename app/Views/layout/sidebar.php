  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #A27245;>
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      <!-- <img src="/assets/img/resto/cutlery.png" alt="Logo Resto UNIKOM" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if (is_koki()) : ?>
            <img src="<?= base_url(); ?>/assets/img/resto/koki.png" class="img-circle elevation-2" alt="Foto Koki">
          <?php elseif (is_pelayan()) : ?>
            <img src="<?= base_url(); ?>/assets/img/resto/pelayan.png" class="img-circle elevation-2" alt="Foto Pelayan">
          <?php elseif (is_kasir()) : ?>
            <img src="<?= base_url(); ?>/assets/img/resto/kasir.png" class="img-circle elevation-2" alt="Foto Kasir">
          <?php endif; ?>
        </div>
        <div class="info" >
          <a href="#" class="d-block" style="color: #FFF;"><?= session()->get('nama'); ?> | <?= session()->get('jabatan'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url(); ?>/" class="nav-link <?= (strpos($title, 'Beranda') !== false) ? "active" : ""; ?>">
              <i class="nav-icon fas fa-home" style="color: #FFF;"></i>
              <p style="color: #FFF;">
                Beranda
              </p>
            </a>
          </li>

          <?php if (!is_kasir()) : ?>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/menu" class="nav-link <?= (strpos($title, 'Menu') !== false) ? "active" : ""; ?>">
                <i class="nav-icon fas fa-book" style="color: #FFF;"></i>
                <p style="color: #FFF;">
                  Menu
                </p>
              </a>
            </li>
          <?php endif ?>

          <?php if (!is_koki()) : ?>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/meja" class="nav-link <?= (strpos($title, 'Meja') !== false) ? "active" : ""; ?>">
                <i class="nav-icon fas fa-chair" style="color: #FFF;"></i>
                <p style="color: #FFF;">
                  Meja
                </p>
              </a>
            </li>
          <?php endif; ?>

          <?php if (!is_kasir()) : ?>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/pemesanan" class="nav-link <?= (strpos($title, 'Pemesanan') !== false) ? "active" : ""; ?>">
                <i class="nav-icon fas fa-shopping-cart"  style="color:#fff"></i>
                <p  style="color:#fff">
                  Pemesanan
                </p>
              </a>
            </li>
          <?php endif ?>

          <?php if (is_kasir()) : ?>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/pembayaran" class="nav-link <?= ((strpos($title, 'Pembayaran') !== false) || ($title == 'Detail Pemesanan')) ? "active" : ""; ?>">
                <i class="nav-icon fas fa-money-bill"  style="color:#fff"></i>
                <p  style="color:#fff">
                  Pembayaran
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/pelaporan" class="nav-link <?= (strpos($title, 'Pelaporan') !== false) ? "active" : ""; ?>">
                <i class="nav-icon fas fa-chart-pie" style="color:#FFF"></i>
                <p style="color:#FFF">
                  Pelaporan
                </p>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>