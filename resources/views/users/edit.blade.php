@extends('users.layout')
@section('content')
<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit User </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit User </li>
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
                                                Edit User 
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('users.index')}}" class= "btn btn-info pull-right">All User</a>
                                            </div>
                                        </div>
                                    </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <strong>Warning!</strong> Please check input field code<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                        </div>
                                        @endif
                                    <div class="panel-body">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                    <form action="{{ route('users.update',$user->id) }}" class="form-horizontal" method="POST">
                                        @csrf
                                        @method('PUT')

                                            <div class="form-group">
                                                <lable for="name" class="control-lable col-sm-3">Name : </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter Name">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="email" class="control-lable col-sm-3">Email: </lable>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter Email">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="tagline" class="control-lable col-sm-3">Address: </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" name="address" value="{{ $user->address }}" class="form-control" placeholder="Enter Address">
                                            
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <lable for="tagline" class="control-lable col-sm-3">Phone: </lable>
                                                <div class="col-sm-9">
                                                    <input type="number" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="Enter Phone">
                                                    
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success pull-right">Edit User</button>

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