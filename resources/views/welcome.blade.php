<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-components-web.css') }}" rel="stylesheet" >
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>

            <div class="row">
                <div class="container">
                    <div class="well jumbotron dark telight" style="text-align:center;  padding:0px;" >
                        <h2><label> Sign Up Teachers and Staff members</label> </h2> 
                    </div>
                </div>
            </div>    
            <div class="row">
            <form enctype="multipart/form-data" action="#" method="post">
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

<script src="{{ asset('js/material-components-web.js') }}"></script>
<script>mdc.autoInit()</script>
<script>window.mdc.autoInit();</script>

        </div>
    </body>
</html>
