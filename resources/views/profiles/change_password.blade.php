@extends('profiles.base')
@section('content')
<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Change Password</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Change Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-8 col-md-offset-2 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Change Password
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                            @elseif(Session::has('error'))
                                            <div class="alert alert-danger" role="alert">{{ Session::get('error')}}</div>
                                            @endif

                                        <form action="{{route('update.password')}}" class="form-horizontal" id="" method="POST" >
                                            @csrf
                                            <div class="form-group">
                                                <lable for="current_password" class="control-lable col-sm-3">Current Password: </lable>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                                    @error('current_password') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <lable for="new_password" class="control-lable col-sm-3">New Password: </lable>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                                    @error('new_password') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="confirm_password" class="control-lable col-sm-3">Confirm Password: </lable>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                                    @error('confirm_password') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success pull-right">SAVE</button>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection