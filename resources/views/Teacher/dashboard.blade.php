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
                    <span> Dashboard </span>
                </a>
            </li>
        </ol>
    </nav>
@endsection    


@section('content')


@endsection

