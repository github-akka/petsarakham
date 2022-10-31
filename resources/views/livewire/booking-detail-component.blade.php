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
                    <h1>Booking Detail</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Booking Detail</li>
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
                                                Booking Detail
                                            </div>
                                            <div class="col-md-6">                                          
                                            <a href="{{route('my_booking')}}" class="btn btn-info pull-right">All Booking</a>

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
                                                    <td>สัตว์เลี้ยง</td>
                                                    <td>เวลาฝาก</td>
                                                    <td>วันที่ฝาก</td>
                                                    <td>วันที่รับคืน</td>
                                                    <td>รายละเอียด</td>
                                                    <td>ชื่อร้านที่ฝาก</td>
                                                    <td>Status</td>                                                   
                                                    <td>Action</td>
                                                   


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bookings as $row)

                                                    <tr>
                                                    
                                                        <th>{{$bookings->firstItem()+$loop->index}}</th>
                                                        <td>{{$row->pet->name}}</td>
                                                        <td>{{$row->time}}</td>
                                                        <td>{{$row->s_date}}</td>
                                                        <td>{{$row->end_date}}</td>
                                                        <td>{{$row->description}}</td>
                                                        <td>{{$row->service->user->name}}</td>                                                                                                    
                                                        <td>{{$row->status}}</td>
                    
                                                        <td>
                                                        <div class="dropdown">
                                                                <button class="btn btn-primary btn-sm-dropdown-toggle" type="button" data-toggle="dropdown">Update Status
                                                                <span class="caret"></span></button>
                                                                    <ul class="dropdown-menu">
                                                                        
                                                                        <li><a href="#" wire:click.prevent="updateBookingStatus({{$row->id}},'canceled')">Canceled</a></li>

                                                                    </ul>
                                                                
                                                            </div>
                                                        </td>
                                                         
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>
