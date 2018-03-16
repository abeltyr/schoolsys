@extends('layouts.app')



@section('left')
<div id="mySidenav" class="sidenav hidden-sm hidden-xs hidden-md" style="padding:0px;">
            <img src="/uploads/employ/default.jpg"  class="left-top">
            <img src="/uploads/employ/{{ Auth::user() -> avatar }}" style="border-radius:40%;" class="left-img" id="leftimg" >
            <div class="left-top-text col-md-6">
                <span >
                {{ Auth::user() -> fname }}
                </span>
            </div> 
            <a href="{{route('sta')}}" class="btn-a1 active" href="#">
                    <span class="box-ai active" ><span class="glyphicon glyphicon-home"  ></span></span>
                    <span class="box-at">
                        Dashboard
                    </span>
                </a>
            <a  class="btn-a" href="#"  >
                <span class="box-ai" ><span class="glyphicon glyphicon-cloud"  ></span></span>
                <span class="box-at">
                    Dashboard
                </span>
            </a>
            <a  class="btn-a" href="#">
                <span class="box-ai" ><span class="glyphicon glyphicon-pencil" ></span></span>
                <span class="box-at">
                    Dashboard
                </span>
            </a>
            <a  class="btn-a" href="#" >
                <span class="box-ai" ><span class="glyphicon glyphicon-euro  " ></span></span>
                <span class="box-at">
                    Dashboard
                </span>
            </a>
            <a  class="btn-a" href="#">
                <span class="box-ai" ><span class="glyphicon glyphicon-jpy" ></span></span>
                <span class="box-at">
                    Dashboard
                </span>
            </a>
            <a  class="btn-a" href="#">
                <span class="box-ai" ><span class="glyphicon glyphicon-ruble" ></span></span>
                <span class="box-at">
                    Dashboard
                </span>
            </a>
            <a  class="btn-a " href="{{ route('getadd') }}">
                <span class="box-ai " ><span class="glyphicon glyphicon-plus" ></span></span>
                <span class="box-at">
                    Add Members
                </span>
            </a>
            <a  class="btn-a" href="#">
                <span class="box-ai " ><span class="glyphicon glyphicon-euro" ></span></span>
                <span class="box-at">
                    Dashboard
                </span>
            </a>
        </div>
    </div>


















@endsection    


@section('top')
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb" style="margin-top:0%; padding:0px; padding-bottom:5px; padding-left:5px; border-radius:9px;"  >
            <li class="breadcrumb-item" >
                <a class="btn-info btn" style="margin-right: 5px;" href="{{ route('getadd') }}">
                    <span class="glyphicon glyphicon-plus" style="margin-right: 5px;"  ></span>
                    <span> Add Members </span>
                </a>
            </li>
            <li class="breadcrumb-item active"  aria-current="page"><a class="btn" >
            <span class="glyphicon glyphicon-user" style="margin-right: 5px;"  ></span>
            <span> Staff </span>
            </a></li>
        </ol>
    </nav>
@endsection    


@section('content')







<head>

<link href="{{ asset('css/color.css') }}" rel="stylesheet" >
</head>
<body class="login" >
    <div class="col-md-8 col-md-offset-2" >

        <div class="well col-md-12  hidden-sm hidden-xs lightblack" >
        @if(count($errors) > 0)   
        @foreach($errors->all() as $error)
            <div class="alert " style="  padding: 20px;  background-color: #f44336; /* Red */ color: white; border-left:6px solid #6b1905;  margin-bottom: 5px;">
                <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                onclick="this.parentElement.style.display='none';">&times;</span>
                <p style="color: white; text-align:center;"> {{$error}} </p>
            </div> 
        @endforeach 
        @endif 
        @if(session('success'))   
        <div class="alert " style="  padding: 15px;  background-color: #44f436;  border-left:6px solid #0ca120; margin-bottom: 5px;">
            <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
            onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="sute" > {{session('success')}} </p>
        </div> 
        @endif 
            <div class="row">
                <div class="container">
                    <div class="well jumbotron dark telight" style="text-align:center;  padding:0px;" >
                        <h2><label> Sign Up Teachers and Staff members</label> </h2> 
                    </div>
                </div>
            </div>    
            <div class="row">
            <form enctype="multipart/form-data" action="{{ route('Signup') }}" method="post">
                <div class="col-md-4">
                    <div class="well" >
                        <div class="row">
                            <img src="/uploads/employ/default.png" alt="img" style="width:100%; height:100%;">  
                        </div>
                        <div class="row">
                            <input type="file" class="col-md-10  col-md-offset-1 col-sm-10 col-sm-offset-2 col-xs-12 col-xs-offset-0 btn btn-primary" style="margin-top:10px;" name="photo">
                        </div>      
                    </div>
                </div> 
                <div class="col-md-8">
                    <div class="form-group form-group-default col-md-6" id="fnameGroup">
                        <label>First Name</label>
                        <div class="controls">
                            <input type="text" name="fname"  value="{{ old('fname') }}" placeholder="First Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-group-default col-md-6" id="lnameGroup">
                        <label>Last Name</label>
                        <div class="controls">
                            <input type="text" name="lname"   value="{{ old('lname') }}" placeholder="Last Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-group-default col-md-12" id="emailGroup">
                        <label>E-Mail</label>
                        <div class="controls">
                            <input type="email" name="email"   value="{{ old('email') }}" placeholder="E-Mail" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-group-default col-md-6" id="phoneGroup">
                        <label style="margin-top:-2.5px; margin-bottom:0px;">Phone</label>
                        <div class="controls">
                            <div class="input-group" >
                                <span class="input-group-addon" style="background:transparent; text-align:center; border:0px; margin:0px; margin-top:-5px; height:20px;"  id="basic-addon1">
                                    +251-
                                </span>  
                                <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" class="form-control input-group-addon" style="margin-top:1px; margin-left:-11px; text-align:left;" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group form-group-default col-md-6" id="roleGroup">
                        <label>Role</label>
                            <select name="role"  class="form-control cent" id="roler" required>
                                <option class="form-control cent" value="1" >Teacher</option> 
                                <option class="form-control cent" value="0">Staff</option> 
                            </select>
                    </div>
                    <div class="form-group form-group-default col-md-12" id="passwordGroup">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-group-default col-md-12" id="conpassGroup">
                        <label>Confirm Password</label>
                        <div class="controls">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required>
                        </div>
                    </div>
                </div> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-block btn-primary col-md-12">
                    <span class="signingin hidden col-md-12"><span class="voyager-refresh"></span> {{ __('voyager.login.loggingin') }}...</span>
                    <span class="signin col-md-12">{{ __('voyager.generic.login') }}</span>
                </button>
                </form>
            </div>      
        
        </div> 
    </div> 
    <div class="well dark col-sm-12 col-xs-12 hidden-md hidden-lg" style="text-align:center; height:100vh;">
        <label  class="col-sm-12 col-xs-12 dark hidden-md hidden-lg " style=" text-align:center; color:#f00; margin-top:30%; ">
            SORRY SINGINGUP STAFF MEMBERS OR TEACHERS ISN'T ALLOWED WITH PHONE, TABLETS AND EVEN  WITH PC BROWSER THAT AREN'T IN FULL WINDOW
        </label>
    </div> 
</body>










@endsection

