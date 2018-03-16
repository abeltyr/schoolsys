<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("admin.title") }}</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    <link href="{{ asset('css/material-components-web.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" >
    <style>
        body {
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        .login-sidebar{
            border-top:5px solid {{ config('voyager.primary_color','#22A7F0') }};
        }
        @media (max-width: 767px) {
            .login-sidebar {
                border-top:0px !important;
                background:#37474F;
                border-left:5px solid #22A7F0;
                
            }
        }
        body.login .form-group-default.focused{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .login-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-7">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                        <img class="img-responsive pull-left logo hidden-xs animated fadeIn" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                        <img class="img-responsive pull-left logo hidden-xs animated fadeIn" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                        <div class="copy animated fadeIn">
                            <h1>{{ Voyager::setting('admin.title', 'Voyager') }}</h1>
                            <p>{{ Voyager::setting('admin.description', __('voyager.login.welcome')) }}</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-5 login-sidebar">
            
            <div class="login-container">
                
                <p>{{ __('voyager.login.signin_below') }}</p>

                <form action="{{ route('Signin') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}" id="emailGroup">
                        <label>E-Mail</label>
                        <div class="controls">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="E-Mail" class="form-control" required>
                         </div>
                    </div>

                    <div class="form-group form-group-default {{ $errors->has('password') ? ' has-error' : '' }}" id="passwordGroup">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-group-default {{ $errors->has('pin') ? ' has-error' : '' }}" id="pinGroup">
                        <label>Pin code</label>
                        <div class="controls">
                            <input type="password" name="pin" placeholder="Pin code" class="form-control" required>
                        </div>
                    </div>
                    <div class="mdc-form-field col-md-6 col-md-offset-1">
                        <div class="mdc-checkbox">
                            <input input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="my-checkbox" class="mdc-checkbox__native-control"/>
                            <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                            </div>
                        </div>
                        <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">Remember Me</label>
                    </div> 
                    <button type="submit" class="btn mdc-button--raised btn-primary col-md-offset-4 col-md-4 col-xs-8 col-xs-offset-2 col-sm-8 col-md-offset-2 logas" style="background:#3895ac; font-size:15px;" >
                        Login
                    </button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>

            <div style="clear:both"></div>
                @if(!$errors->isEmpty())
                    @foreach($errors->all() as $err)
                        <div class="alert alert-red">
                            <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                            onclick="this.parentElement.style.display='none';">&times;</span>
                            <ul class="list-unstyled">
                                <li>{{ $err }}</li>
                            </ul>
                        </div>
                    @endforeach
                @endif
                @if(session('failer'))   
                <div class="alert alert-red">
                    <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                    onclick="this.parentElement.style.display='none';">&times;</span>
                    <ul class="list-unstyled sute">
                        <li>{{session('failer')}}</li>
                    </ul>
                </div>
                @endif 
            </div>

        </div>
    </div> 
</div> 
<script>mdc.autoInit()</script>
<script>window.mdc.autoInit();</script>
<script src="{{ asset('js/material-components-web.js') }}"></script>
</body>
</html>
