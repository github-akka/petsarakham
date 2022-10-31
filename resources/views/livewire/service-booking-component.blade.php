<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Booking </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Booking </li>
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
                                            <div class="col-md-10">
                                                ฟอร์มข้อมูลการจอง
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                        @endif
                                        
                                        <form class="form-horizontal" wire:submit.prevent="createBooking" method="POST" >
                                                @csrf
                                                    <div class="form-group">
                                                        <lable for="pet_id" class="control-lable col-sm-3">Pet name : </lable>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" wire:model="pet_id">
                                                                <option value="">เลือกสัตว์เลี้ยง (หากไม่มีสัตว์เลี้ยง ต้องเพิ่มสัตว์เลี้ยงก่อนจอง)</option>
                                                                @foreach($spets as $spet)
                                                                    <option value="{{$spet->id}}">{{$spet->name}}</option>
                                                                @endforeach

                                                            </select>
                                                            @error('pet_id') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                             
                                                        <div class="col-sm-9">
                                                            <input type="hidden" class="form-control" name="service_id" wire:model="service_id" />
                                                          
                                                        </div>
                                                    </div>                                                                                                      

                                                    <div class="form-group">
                                                        <lable for="time" class="control-lable col-sm-3">Time : </lable>
                                                        <div class="col-sm-9">
                                                            <input type="time" class="form-control" name="time" wire:model="time" />
                                                            @error('time') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <lable for="s_date" class="control-lable col-sm-3">วันที่ฝาก : </lable>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" min="<?php echo date('Y-m-d');?>" name="s_date" wire:model="s_date" />
                                                            @error('s_date') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="form-group">
                                                        <lable for="end_date" class="control-lable col-sm-3">วันที่รับคืน : </lable>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" min="<?php echo date('Y-m-d');?>" name="end_date" wire:model="end_date" />
                                                            @error('end_date') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>

                            
                                                    <div class="form-group">
                                                        <lable for="description" class="control-lable col-sm-3">รายละเอียดเพิ่มเติม : </lable>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" wire:model="description"></textarea>
                                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                
                                                <button type="submit" class="btn btn-success pull-right">Booking</button>

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
