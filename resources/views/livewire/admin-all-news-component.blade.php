
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
                                            

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                            <table class=" table table-striped">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>ชื่อข่าว</td>
                                                    <td>เนื้อหา</td>
                                                    <td>รูปภาพ</td>
                                                    <td>ผู้เขียน</td>                                                
                                                    
                                                   


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($news as $row)

                                                    <tr>
                                                    
                                                        <th>{{$news->firstItem()+$loop->index}}</th>
                                                        <td>{{$row->title}}</td>
                                                        <td>{{$row->body}}</td>
                                                        <td><img src="{{ asset('images/news')}}/{{$row->image}}" width="60"/></td>
                                                        <td>{{$row->user->name}}</td>                                                                                                                                                                            
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="pagination-block">
                                            {{ $news->links('layouts.paginationlinks') }} 
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

