<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AmayyyMedica | Daftar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#">AmayyyMedica</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Daftarkan Diri Anda Sekarang!</p>

        <form action="register" method="post">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <div class="input-group">
              <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="no_hp">No. Handphone</label>
            <div class="input-group">
              <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="Masukkan No. Handphone">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Kata Sandi</label>
            <div class="input-group">
              <input id="password" name="password" type="password" class="form-control" placeholder="Masukkan Kata Sandi">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-danger btn-block">Daftar</button>
            </div>
          </div>
        </form>

        <p class="mt-3 text-center">
          <a href="/login">Sudah Punya Akun? Masuk Disini!</a>
        </p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
