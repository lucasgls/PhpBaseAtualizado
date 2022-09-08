<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    $i="insert into reg(name,username,password,city,gender)value('$t','$u','$p','$c','$g')";
    mysqli_query($con, $i);
}
?>

<?php
if(isset($_POST['log'])){
      header ('location:loginv2.php');
   }
?>
<!--

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro Outwear</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p><b>Cadastro</b>OutWear</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça o seu cadastro para acessar</p>

      <form method="post">
        <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nome Completo" name="text">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- --> <!-- --> <!-- -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- --> <!-- --> <!-- -->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- --> <!-- --> <!-- -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cidade" name="city">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- --> <!-- --> <!-- -->
        <div class="input-group mb-3">
            <input type="radio"name="gen" id="gen" value="male">male
            <input type="radio" name="gen" id="gen" value="female">female
        </div>
        <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->
        <div class="row">
          <div class="col-12">
            <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block" name="sub" >Cadastrar</button>
            </div>
            <p></p>
            <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block" name="log" >Voltar ao login</button>
            </div>
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
      </form>
<!--      
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
-->

      <!-- /.social-auth-links -->
<!--
      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
-->      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
