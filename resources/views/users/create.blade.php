@extends('users.layout')
@section('content')
<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add User </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Add User </li>
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
                                                Add New User 
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('users.index')}}" class= "btn btn-info pull-right">All User</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                    <form action="{{ route('users.store') }}" class="form-horizontal" method="POST">
                                        @csrf
                                            <div class="form-group row">
                                                <lable for="name" class="control-lable col-sm-3">Create As : </lable>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="utype" name="utype">
                                                        <option value="CST">Customer</option>
                                                        <option value="SVP">Service Provider</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="name" class="control-lable col-sm-3">Name : </lable>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="email" class="control-lable col-sm-3">Email: </lable>
                                                <div class="col-sm-9">
                                                    <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="tagline" class="control-lable col-sm-3">Address: </lable>
                                                <div class="col-sm-9">
                                                    <textarea id="name" type="text" class="form-control" name="address" value="" required="" autofocus=""></textarea>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <lable for="tagline" class="control-lable col-sm-3">Phone: </lable>
                                                <div class="col-sm-9">
                                                    <input id="phone" type="number" class="form-control" name="phone" value="" required="" autofocus="">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="tagline" class="control-lable col-sm-3">Password: </lable>
                                                <div class="col-sm-9">
                                                    <input id="password" type="password" class="form-control" name="password" required="">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="tagline" class="control-lable col-sm-3">Confirm Password: </lable>
                                                <div class="col-sm-9">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                                                    
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success pull-right">Add User</button>

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