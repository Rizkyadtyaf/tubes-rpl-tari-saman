<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('../gambar/background-resto1.jpeg');">
    <!-- Content Header (Page header) -->
    <div class="content-header"  style="color:#fff">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Meja</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color:#fff">Beranda</a></li>
              <li class="breadcrumb-item active" style="color:#fff">Daftar Meja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-striped" style="background-color:#CCA97C">
                  <thead>
                    <tr>
                      <th style="width: 20%">No</th>
                      <th class="text-center" style="width: 40%">Nomor Meja</th>
                      <th class="text-center" style="width: 40%">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <style>
                      .muda-background {
                          background-color: :#CCA97C;
                      }
                      .tua-background {
                          background-color: #AD7548;
                      }
                   
                  </style>

                    <?php foreach($meja as $i => $mj) : ?>
                      <tr class="<?= ($i % 2 == 0) ? 'red-background' : 'white-background'; ?>">
                        <td><?= $i + 1; ?></td>
                        <td class="text-center"><?= $mj['no_meja']; ?></td>
                        <td class="text-center">
                          <span class="badge bg-<?= ($mj['status_meja'] == 'Kosong') ? 'success' : 'danger'; ?>">
                          <?= $mj['status_meja']; ?></span>
                      

                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

<?= $this->endSection(); ?>