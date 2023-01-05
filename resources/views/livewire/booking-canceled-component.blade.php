
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
                    <h1>My Orders Cancelled</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>My Orders Cancelled</li>
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
                                                My Orders Cancelled 
                                            </div>
                                            <div class="col-xs-6">
                                            

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
                                                            <td>สัตว์เลี้ยง</td>
                                                            <td>เวลา</td>
                                                            <td>วันที่ฝาก</td>
                                                            <td>วันที่รับคืน</td>
                                                            <td>รายละเอียดการฝาก</td>
                                                            <td>ชื่อผู้จอง</td>
                                                            <td>ยกเลิกเมื่อ</td>
                                                            <td>Status</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($bookings as $row)

                                                            <tr>
                                                            
                                                                <th>{{$row->id}}</th>
                                                                <td>{{$row->pet->name}}</td>
                                                                <td>{{$row->time}}</td>
                                                                <td>{{$row->s_date}}</td>
                                                                <td>{{$row->end_date}}</td>
                                                                <td>{{$row->description}}</td>
                                                                <td>{{$row->user->name}}</td>
                                                                <td>{{$row->canceled_date}}</td>
                                                                <td>
                                                                    @if($row->status==1)
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

