<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 col-md-offset-4">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    <strong>Alert!</strong> {{ session()->get('error') }}
                </div>
            @elseif(session()->has('success'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ session()->get('success') }}
                </div>
            @elseif(session()->has('alert'))
                <div class="alert alert-danger">
                    <strong>Alert!</strong> {{ session()->get('alert') }}
                </div>
            @endif
            <div class="panel">
                <div class="panel-heading panel-success text-center" style="padding: 0;">
                    <h3 class="text-center">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="email" class="control-label">E-Mail Address or Phone Number</label>

                                <input id="email" type="text" class="form-control" name="email"
                                       value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="password" class="control-label">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-6 text-center">
                                <div class="checkbox-inline">
                                    <label>
                                        <input type="checkbox"
                                               name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-block">
                                    Login
                                </button>
                                <a class="btn btn-danger btn-block" href="#">
                                    <i class="fa fa-google-plus-circle"></i> Sign In with google
                                </a>
                                <a class="btn btn-primary btn-block" href="#">
                                    <i class="fa fa-facebook-official"></i> Sign In with facebook
                                </a>
                                <br>
                                <a class="btn-link" href="#">
                                    Register as new user
                                </a>
                                <br>
                                <a class="btn-link" href="#">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
