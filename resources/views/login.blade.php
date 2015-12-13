<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-default.css')}}">

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
<div class="lock-header">
    <!-- BEGIN LOGO -->
    <a class="center" id="logo" href="index.html">
        <!--   <img class="center" alt="logo" src=""> -->
      </a>
      <!-- END LOGO -->
</div>
<div class="login-wrap">

        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
      {!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!}
        <div class="metro double-size green">
                <div class="input-append lock-input">
                    {!! Form::text('usuario',null,array('placeholder' => 'usuario')) !!}

                </div>
        </div>
        <div class="metro double-size yellow">
                <div class="input-append lock-input">
                    {!! Form::password('password',null,array('placeholder' => 'clave')) !!}

                </div>
        </div>
        <div class="metro single-size terques login">
            {!! Form::submit('ingresar',['class'=>'btn login-btn']) !!}

        </div>
    {!! Form::close() !!}

    <div class="login-footer">

        <div class="forgot-hint pull-right">
            <a id="forget-password" class="" href="javascript:;">¿Recordar Contraseña?</a>
        </div>
    </div>
</div>
</body>
<!-- END BODY -->
</html>