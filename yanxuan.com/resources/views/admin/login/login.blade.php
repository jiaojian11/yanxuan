<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>网易严选后台系统</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="/adminCSS/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminCSS/dist/dfonts/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminCSS/dist/dfonts/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminCSS/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminCSS/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">网易严选后台系统</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">请登录你的账号</p>
    <form action="{{url('admin/login')}}" method="post">
      @if(session('error'))
        <div class="col-sm-6 ">
          <div class="alert alert-danger alert-dismissable" style="width:300px;">
            {{session('error')}}
          </div>
        </div>
      @endif
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="请输入账号">
      </div>
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="请输入密码">


      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> 记住账号
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign in</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">忘记密码?</a><br>

  </div>
  <!-- /.login-box-body -->

<!-- jQuery 2.2.0 -->
<script src="/adminCSS/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/adminCSS/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/adminCSS/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  setTimeout(function(){
    $('.alert-danger').hide();
  },2000)
</script>
</body>
</html>
