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
                    <h1>All Services </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Services </li>
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
                                                All Services 
                                            </div>
                                            <div class="col-md-6">
                                            

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                        @endif
                                            <table class=" table table-striped">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Image</td>
                                                    <td>Name</td>
                                                    <td>Price</td>
                                                    <td>User_Name</td>
                                                    <td>Featured</td>
                                                    <td>Category</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($aservice as $row)

                                                    <tr>
                                                    
                                                        <th>{{$aservice->firstItem()+$loop->index}}</th>
                                                        <td><img src="{{ asset('/images/services/thumbnails')}}/{{$row->thumbnail}}" width="60"/></td>
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->price}}</td>
                                                        <td>                                                       
                                                            {{$row->user->name}}
                                                        </td>
                                                        
                                                        <td>
                                                            @if($row->featured)
                                                              Yes
                                                            @else
                                                              No    
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{$row->category['name']}}
                                                        </td>
                                       
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="pagination-block">
                                            {{ $aservice->links('layouts.paginationlinks') }} 
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
