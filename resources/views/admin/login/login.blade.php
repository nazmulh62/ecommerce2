<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ecommerce | Admin Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('/admin')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{asset('/admin')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('/admin')}}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('/admin')}}/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b class="text text-warning">Admin-</b>Login Here</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Admin Login To Start Your Session</p>
        <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {{ $errors->has('email') ? $errors->first('email'):''}}

            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {{ $errors->has('password') ? $errors->first('password'):''}}

            </div>


            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="btn" class="btn btn-danger btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
                <div class="col-sm-8">
                    <div class="checkbox icheck pull-right" style="padding-left: 10px;">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->

            </div>
        </form>


    </div><!-- /.login-box -->
</div>
<!-- jQuery 2.1.4 -->
<script src="{{asset('/admin')}}/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('/admin')}}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{asset('/admin')}}/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
