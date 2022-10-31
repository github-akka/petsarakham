@extends('users.layout')
@section('content')
<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>User List</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>User List</li>
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
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            All User
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('users.create')}}" class="btn btn-info pull-right">Add User</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <table class=" table table-striped">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Address</td>
                                                <td>Phone</td>
                                                <td>Status</td>
                                                <td>Action</td>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $user)

                                            <tr>

                                                <th>{{$data->firstItem()+$loop->index}}</th>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->utype}}</td>

                                                <td>
                                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">



                                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this item?');">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="pagination-block">
                                        {{ $data->links('layouts.paginationlinks') }}
                                    </div>
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