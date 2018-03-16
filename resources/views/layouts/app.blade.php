
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@ves.web</title>


    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/box.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/popup.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/pro.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/model.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/material-components-web.css') }}" rel="stylesheet" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body class="login" >

<div class="all" >
    <div class="left hidden-sm hidden-xs hidden-md" id="left" onmouseover="openNav()" onmouseout="closeNav()"> 
        @yield('left')
    <div class="right hidden-xs hidden-sm hidden-md"   onmouseover="closeNav()">        
        <div id="loader"></div>
        <header >
            <div class="toper">
                <div class="text-left ">
                    @yield('top')
                </div>
                <div class="text-right col-md-offset-2">
                   <ul class="nav navbar-nav navbar-right" style="padding-top:0px;" >
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        @else
                        <button class="btn btn-dark imgicon" style="padding:0px; postion:absloute; max-width:1400px;"  onclick="func()">
                            <img src="/uploads/employ/{{ Auth::user() -> avatar }}"  class="rounded" style="width:58.5px; height:100%; border-radius:4px;"alt="">
                        </button>
                        @endif
                    </ul>
                </div>
            </div>
        </header> 
        <div class="popup col-md-offset-9 hidden-md hidden-sm hidden-xs" >
            <div class="popuptext" style="border-radius:7px;" id="mypopup" >
                <div class="row">
                    <div class="container " >
                        <div class="well col-md-12 " style="padding:0px; padding-top:8px; padding-bottom:8px;  background:transparent; border:0px; border-radius:0px;" >
                            <div class="col-md-12">
                                <label  class="col-md-12  control-label" >STAFF MEMBER</label>
                            </div>
                            <div class="col-md-4" style="border-bottom:0.5px solid #eee;  " >
                                <img  src="/uploads/employ/{{ Auth::user() -> avatar }}" style="width:80px; height:80%; border-radius:9px;" alt="">
                            </div>
                            <div class="col-md-8" style="text-align: left; border-bottom:0.5px solid #eee;" >
                            @if (Auth::guest())
                            @else
                                <label  class="col-md-12  control-label" style="color:#00bcd4; font-family:bold;" >{{ Auth::user() -> fname }}</label>
                                <label  class="col-md-12 control-label" style="color:#00bcd4; font-family:bold;">{{ Auth::user() -> email }}</label>
                                <label  class="col-md-12 control-label" style="color:#00bcd4; font-family:bold; margin-bottom:12px">0{{ Auth::user() -> phone }}</label>
                            @endif
                            </div>   
                            <a role="button" id="btn-tran" class="btn col-md-12 " style="margin-bottom:0px; border-color:transparent; border-radius:0px;   "  href="#">
                                <span class="glyphicon glyphicon-user" style="float:left; margin-top:4px;  margin-left:11px; margin-right:11px; font-size:12px;" ></span>
                                Profile
                            </a>     
                            <a role="button" id="btn-tran" class="btn col-md-12" style=" margin-top:0px; margin-bottom:3px; border-color:transparent; border-radius:0px;" href="#">
                                <span class="glyphicon glyphicon-home" style="float:left; margin-top:4px; margin-left:11px; margin-right:11px; font-size:12px;" ></span>
                                Home
                            </a>        
                            <a class="btn-danger btn col-md-10 col-md-offset-1" style="background:#e00; color:#fff; text-align:center; "
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-off" style="margin-top:3px; margin-right:10px;" ></span>
                                Logout
                            </a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
        <div class="right-bot">     
            @yield('content')
        </div>
    </div>
    <div class="well dark col-sm-12 col-xs-12 col-md-12  hidden-lg" style="text-align:center; height:100vh; background:#212121; ">
        <span  class="col-sm-12 col-xs-12 col-md-12  hidden-lg " style=" text-align:center; color:#f00; margin-top:30%;    ">
            SORRY THIS WEBSITE DOESN'T ALLOW ACCESS WITH PHONE, TABLETS AND EVEN  WITH PC BROWSER THAT AREN'T IN FULL WINDOW'S
        </span>
    </div> 
</div>






  



<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/signup.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/popup.js') }}"></script>
<script src="{{ asset('js/dropdown.js') }}"></script>
<script src="{{ asset('js/model.js') }}"></script>
<script src="{{ asset('js/material-components-web.js') }}"></script>
<script>mdc.autoInit()</script>
<script>window.mdc.autoInit();</script>

</body>
</html>