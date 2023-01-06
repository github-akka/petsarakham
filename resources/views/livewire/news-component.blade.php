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
                    <h1>All News</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All News</li>
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
                                                All News
                                            </div>
                                            <div class="col-md-6">
                                            <a href="{{route('news.add')}}" class="btn btn-info pull-right">Add News</a>

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
                                                    <td>หัวข้อ</td>
                                                    <td>เนื้อหา</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($snews as $snew)
                                                    <tr>                                             
                                                        <th>{{$snews->firstItem()+$loop->index}}</th>
                                                        <td><img src="{{ asset('/images/news')}}/{{$snew->image}}" width="60"/></td>
                                                        <td>{{$snew->title}}</td>
                                                        <td>{{$snew->body}}</td>
                                                        <td>                                                 
                                                            <a href="#" onclick="confirm('Are you sure, Delete News') || event.stopImmediatePropagation()" wire:click.prevent="deleteNews({{$snew->id}})" style="margin-left-10px" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                        </td>                                                 
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if($snews->count() > 0)
                                                @else
                                                    <h3 align="center"> ไม่มีรายการ !! </h3>
                                                @endif
                                        {{$snews->links()}}
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>

