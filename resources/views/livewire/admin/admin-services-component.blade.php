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
                    <h1>All Service categories</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Service categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div>
                            <div class=" portfolioContainer" style="width: 100%;">
                                <div class="col-xs-12 profile1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row" >
                                                <div class="col-xs-6">
                                                    All Service Categories
                                                </div>
                                                <div class="col-xs-6">
                                                <a href="{{route('add_service')}}" class="btn btn-info pull-right">Add Service</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroll-new" style=" position: relative; overflow: hidden; width: 100%; height: 485px;">
                                            <div style="position: absolute; inset: 0px; overflow: scroll; margin-right: -5px; margin-bottom: -5px;">    
                                                <div class="panel-body">
                                                    @if(Session::has('message'))
                                                        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                                    @endif
                                                        <table class=" table table-striped">
                                                        <thead>
                                                            <tr style="margin-right: -17px;">
                                                                <td>No</td>
                                                                <td>Image</td>
                                                                <td>Name</td>
                                                                <td>Price</td>
                                                                <td>Status</td>
                                                                <td>Featured</td>
                                                                <td>Category</td>
                                                                <td>Action</td>
                                                            


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($services as $service)

                                                                <tr>
                                                                
                                                                    <th>{{$services->firstItem()+$loop->index}}</th>
                                                                    <td><img src="{{ asset('/images/services/thumbnails')}}/{{$service->thumbnail}}" width="60"/></td>
                                                                    <td>{{$service->name}}</td>
                                                                    <td>{{$service->price}}</td>
                                                                    <td>
                                                                        @if($service->status)
                                                                            Active
                                                                        @else
                                                                            Inactive
                                                                        @endif

                                                                    </td>
                                                                    <td>
                                                                        @if($service->featured)
                                                                        Yes
                                                                        @else
                                                                        No    
                                                                        @endif
                                                                    </td>
                                                                    <td>{{$service->category->name}}</td>
                                                                    <td>
                                                                        <a href="{{route('edit_service',['service_slug'=>$service->slug])}}" ><i class="fa fa-edit fa-2x text-info"></i></a>
                                                                        <a href="#" onclick="confirm('Are you sure, Delete Service') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{$service->id}})"
                                                                        style="margin-left-10px" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                    {{$services->links()}}
                                                </div>
                                            </div>
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
