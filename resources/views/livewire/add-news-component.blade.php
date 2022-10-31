<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add News </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Add News </li>
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
                                                Add News
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('news.all')}}" class= "btn btn-info pull-right">All News</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="createNews" >
                                            @csrf

                                            <div class="form-group">
                                                <lable for="title" class="control-lable col-sm-3">ชื่อข่าวสาร : </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="title" wire:model="title" />
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="body" class="control-lable col-sm-3">เนื้อหา : </lable>
                                                <div class="col-sm-9">
                                                   
                                                    <textarea id="body" type="text" class="form-control" name="body" wire:model="body" ></textarea>
                                                    @error('body') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

             
                                            <div class="form-group">
                                                <lable for="image" class="control-lable col-sm-3">Image: </lable>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control-file" name="image" wire:model="image" />
                                                    @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                                    @if($image)
                                                        <img src="{{$image->temporaryUrl()}}" width="60"/>
                                                    @endif
                                                </div>
                                            </div>
                                            

                                            <button type="submit" class="btn btn-success pull-right">Add News</button>

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
