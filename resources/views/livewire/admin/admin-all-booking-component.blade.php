
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
                    <h1>All Booking</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Booking</li>
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
                                                All Booking 
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
                                                    <td>สัตว์เลี้ยง</td>
                                                    <td>เวลาฝาก</td>
                                                    <td>วันที่ฝาก</td>
                                                    <td>วันที่รับคืน</td>
                                                    <td>รายละเอียด</td>
                                                    <td>ชื่อร้านที่ฝาก</td>
                                                    <td>สถานะการจอง</td>                                                   
                                                    
                                                   


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($abooking as $row)

                                                    <tr>
                                                    
                                                        <th>{{$abooking->firstItem()+$loop->index}}</th>
                                                        <td>{{$row->pet->name}}</td>
                                                        <td>{{$row->time}}</td>
                                                        <td>{{$row->s_date}}</td>
                                                        <td>{{$row->end_date}}</td>
                                                        <td>{{$row->description}}</td>
                                                        <td>{{$row->service->user->name}}</td>                                                                                                    
                                                        <td>@if($row->status==1)
                                                                pending
                                                            @elseif ($row->status==2)
                                                                จองแล้ว
                                                            @else
                                                                ยกเลิกแล้ว
                                                            @endif
                                                        </td>
                                                                                                          
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="pagination-block">
                                            {{ $abooking->links('layouts.paginationlinks') }} 
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

