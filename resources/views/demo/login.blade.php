<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <title>Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!--[if lt IE 9]>
            <script src="{{ asset('js/html5shiv.min.js') }}"></script>
            <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
    </head>
    <body>
<!--        <div class="main-wrapper">-->
            <div class="account-page">
                <div class="container d-flex h-100">
                    <div class="account-box justify-content-center align-self-center">
                        <div class="account-logo">
                            <a href="{{ url('demoIndex') }}"><img src="{{ asset('images/logo2.png') }}" alt="Preadmin"></a>
                        </div>
                        <h3 class="account-title">Login</h3>
                        <div class="account-wrapper">
                            <form action="{{url('demoIndex')}}">
                                <div class="form-group form-focus">
                                    <label class="control-label">Username or Email</label>
                                    <input class="form-control floating" type="text">
                                </div>
                                <div class="form-group form-focus">
                                    <label class="control-label">Password</label>
                                    <input class="form-control floating" type="password">
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" class="dash-btn" type="submit">Login</button>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('demoForgotPassword') }}">Forgot your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!--        </div>-->
        <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
