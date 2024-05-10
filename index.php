<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin|Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .error-message {
      color: red;
      font-size: 14px;
      display: block;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="alert alert-success" id="loginSuccessMessage" style="display: none;">
        <h5>You are successfully logged in !</h5>
</div>
<div class="alert alert-danger" id="loginFailureMessage" style="display: none;">
        <h5>Login Failed,Enter Wrong Username or password.</h5>
</div>
<div class="login-box">
  <div class="login-logo" >
  <!-- <a href=" " class="brand-link"> -->
      <img src="/AdminLTE_PHP/assets/img/amdoc.jpg" style="width: 30px;" alt="Amdocs Logo" class="img-circle"
           style="opacity: .8">
      <!-- <span class="brand-text font-weight-light">Amdocs</span> -->
    <!-- </a> -->
    <b>Am</b>docs
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form >
        <div id="divusernameError">
        <span class="error-message" id="usernameError"></span>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="username" onchange="handleChangeusername(this)">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div id="divPasswordError">
        <span class="error-message" id="passwordError"></span>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" onchange="handleChangePasswrd(this)">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button class="btn btn-primary btn-block"  onClick="login()">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- jQuery -->
<!-- <script src="assets/plugins/jquery/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<!-- /.login-box -->
<script src="./assets/js/pages/index.js"></script>
<script src="./assets/js/common.js"></script>
<!--crypto.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>


</body>
</html>
