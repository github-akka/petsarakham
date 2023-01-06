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
                    <h1>All Pets</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Pets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer" style="width: 100%;">
                            <div class="col-xs-12 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                All Pets
                                            </div>
                                            <div class="col-xs-6">
                                            <a href="{{route('add.pet')}}" class="btn btn-info pull-right">Add Pet</a>

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
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Image</td>
                                                            <td>ชื่อ</td>
                                                            <td>ประเภท</td>
                                                            <td>อายุ</td>
                                                            <td>น้ำหนัก</td>
                                                            <td>Action</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($spets as $spet)
                                                            <tr>                                                       
                                                                <th>{{$spets->firstItem()+$loop->index}}</th>
                                                                <td><img src="{{ asset('/images/pets')}}/{{$spet->pet_image}}" width="60"/></td>
                                                                <td>{{$spet->name}}</td>
                                                                <td>{{$spet->pet_type}}</td>
                                                                <td>{{$spet->age}}</td>
                                                                <td>{{$spet->weight}}</td>
                                                                <td>
                                                                    <a href="{{route('edit.pet',['pet_id'=>$spet->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                                    <a href="#" onclick="confirm('Are you sure, Delete Pet') || event.stopImmediatePropagation()" wire:click.prevent="deletePet({{$spet->id}})" style="margin-left-10px" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                                </td>                     
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @if($spets->count() > 0)  
                                                @else
                                                    <h3 align="center"> กรุณาเพิ่มสัตว์เลี้ยง !! </h3>
                                                @endif
                                                {{$spets->links()}}
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

