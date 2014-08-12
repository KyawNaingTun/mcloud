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
        <!-- Ionicons style -->
        <link href="admin-theme/css/ionicons.min.css" rel="stylesheet" type="text/css" />
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
            <div class="header">Register New Membership</div>
            {{ Form::open(array('url'=>'/user/create', 'class'=>'', 'role'=>'form')) }}
                <!-- for role id hidden -->
                <input type="hidden" name="role_id" value="1">
                <div class="body bg-gray has-warning">
                    <div class="form-group has-warning">
                        @if ($errors->first('fullname'))
                            <label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> {{ $errors->first('fullname') }}</label>
                        @endif
                        <input type="text" name="fullname" class="form-control" placeholder="Full name"/>
                        
                    </div>
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
                    <div class="form-group has-warning">
                        @if ($errors->first('confirm-password'))
                            <label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> {{ $errors->first('confirm-password') }}</label>
                        @endif
                        <input type="password" name="confirm-password" class="form-control" placeholder="Retype password"/>
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">Sign me up</button>

                    <a href="login.html" class="text-center">I already have a membership</a>
                </div>
            {{ Form::close() }}

            <div class="margin text-center">
                <span>Register using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="admin-theme/js/bootstrap.min.js" type="text/javascript"></script>      

    </body>
</html>