@extends('users.layout')
@section('content')
<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display:block !important;
        }
    </style>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>My Booking</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>My Booking</li>
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
                                                My Booking 
                                            </div>
                                            <div class="col-md-6">
                                            <a href="{{ route('#')}}" class= "btn btn-info pull-right"></a>

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
                                                    <td>name</td>
                                                    <td>price</td>
                                                    
                                                    <td>category</td>
                                                    
                                                   


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($aser as $row)

                                                    <tr>
                                                    
                                                        <th>{{$aser->firstItem()+$loop->index}}</th>
                                                        <td>{{$aser->name}}</td>
                                                        <td>{{$aser->price}}</td>
                                                        <td>{{$aser->category->name}}</td>
                                                    
                
                                                        <td>
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="pagination-block">
                                            {{ $aser->links('layouts.paginationlinks') }} 
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