<!DOCTYPE html>
<html lang="en">

<!-- Manggil Head -->
<?= $this->include('layout/head'); ?>
<style>
   .custom-checkbox {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: white; /* Color of the checkbox */
            border: 2px solid #000; /* Border color of the checkbox */
            position: relative;
            cursor: pointer;
        }
</style>
<body class="hold-transition login-page"style="background-image: url('../gambar/background-resto.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
  <div class="login-box" >
    <!-- /.login-logo -->
    <div class="card card-outline" style="background-color:#EBD0A7;">
      <div class="card-header text-center"  style="background-color:#464717;">
        <a href="#" class="h1"  style="color:#fff"><b>Resto</b> Unikom</a>
      </div>
      <div class="card-body">
        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Perhatian!</strong> <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
          
        <form action="<?= base_url(); ?>/login/auth" method="POST" >
          <div class="input-group mb-3" >
            <input type="username" class="form-control" placeholder="Nama pengguna" name="username" required="required" >
            <div class="input-group-append" >
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Kata sandi" name="password" required="required">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8" >
              <div class="icheck-primary" >
                <font color="#000">
                <input type="checkbox" id="remember" class="custom-checkbox">
                <label for="remember">
                  Ingat saya
                </label>
                </font>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4" >
              <button type="submit" class="btn btn-primary btn-block" style="background-color:#633F1F">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- Manggil Javasript -->
  <?= $this->include('layout/javascript'); ?>

</body>

</html>