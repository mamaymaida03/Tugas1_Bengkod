<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AmayyyMedica | Masuk</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#">AmayyyMedica</a>
    </div>
    <!-- /.login-logo -->

    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Selamat Datang di AmayyyMedica</p>

        <form action="{{ route('login') }}" method="post">
          @csrf

          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <input id="email" name="email" type="email" class="form-control" placeholder="Email" required autofocus>
              <div class="input-group-append">
                <div class="input-group-text rounded-right">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text rounded-right">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-danger btn-block">Masuk</button>
            </div>
          </div>
        </form>

        <p class="mt-3 mb-0 text-center">
          <a href="/register">Belum Punya Akun? Daftar Sekarang!</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
