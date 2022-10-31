<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Pet </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit Pet </li>
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
                                                Edit Pet 
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('all.pet')}}" class= "btn btn-info pull-right">All Pet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="updatePet" >
                                            @csrf
                                            <div class="form-group">
                                                <lable for="name" class="control-lable col-sm-3">ชื่อสัตว์เลี้ยง: </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name" wire:model="name" />
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="pet_type" class="control-lable col-sm-3">ประเภทสัตว์เลี้ยง: </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="pet_type" wire:model="pet_type" />
                                                    @error('pet_type') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="age" class="control-lable col-sm-3">อายุ: </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="age" wire:model="age" />
                                                    @error('age') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <lable for="weight" class="control-lable col-sm-3">น้ำหนัก: </lable>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="weight" wire:model="weight" />
                                                    @error('weight') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <lable for="pet_image" class="control-lable col-sm-3">ภาพประกอบ : </lable>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control-file" name="pet_image" wire:model="newimage" />
                                                    @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                                    @if($newimage)
                                                        <img src="{{$newimage->temporaryUrl()}}" width="60"/>
                                                    @else
                                                        <img src="{{asset('images/pets')}}/{{$pet_image}}" width="60"/>
                                                    @endif
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success pull-right">Update Pet</button>

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
