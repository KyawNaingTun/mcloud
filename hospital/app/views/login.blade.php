<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="admin-theme/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="admin-theme/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <!-- Theme style -->
        <link href="admin-theme/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
        
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-warning"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <b>{{ Session::get('error') }}</b>
                </div>
            @endif
            
            {{ Form::open(array('url'=>'/user/login', 'class'=>'', 'role'=>'form')) }}
                <div class="body bg-gray has-warning">
                    <div class="form-group has-warning">
                        @if ($errors->first('email'))
                            <label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> {{ $errors->first('email') }}</label>
                        @endif
                       
                        <input type="text" name="email" class="form-control" placeholder="Email"/>
                       
                    </div>
                    <div class="form-group has-warning">
                        @if ($errors->first('password'))
                            <label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> {{ $errors->first('password') }}</label>
                        @endif
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                       
                    </div>         
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>
            {{ Form::close() }}

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
       <!-- Bootstrap -->
        <script src="admin-theme/js/bootstrap.min.js" type="text/javascript"></script>      

    </body>
</html>