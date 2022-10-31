<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Profile</li>
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
                                                Profile
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.service_categories')}}" class= "btn btn-info pull-right">All Categories</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="updateProfile" >
                                            @csrf
                                            <div class="form-group">
                                                <lable for="name" class="control-lable col-sm-3">Name : </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name" wire:model="name" />
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="email" class="control-lable col-sm-3">Email : </lable>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" />
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="address" class="control-lable col-sm-3">Address : </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="address" wire:model="address" />
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="phone" class="control-lable col-sm-3">phone : </lable>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="phone" wire:model="phone" />
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="image" class="control-lable col-sm-3">Avatar : </lable>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control-file" name="avatar" wire:model="newimage" />
                                                    @error('newimage') <p class="text-danger">{{$message}}</p> @enderror

                                                    @if($newimage)
                                                        <img src="{{$newimage->temporaryUrl()}}" width="60"/>
                                                    @else
                                                        <img src="{{asset('images/profile')}}/{{$avatar}}" width="60"/>
                                                    @endif
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success pull-right">Save</button>

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
