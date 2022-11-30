<div>
<section class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('assets/img/slide/1.jpg') }}" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('assets/img/slide/2.jpg') }}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:black;">บริการรับฝากสัตว์เลี้ยง</h2>
                    
                </div>
                <div class="filter-header" class="col-md-8">
                    <form id="sform" action="{{route('searchServices')}}" method="post">
                        @csrf                        
                        <input type="text" id="q" name="q" required="required" placeholder="ค้นหา บริการ?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
        <section class="content-central">
            <div class="content_info content_resalt">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                                @foreach($scategories as $scategory)
                                    <li data-toggle="tooltip" title="" data-original-title="{{$scategory->name}}"> 
                                        <a href="{{route('home.service_by_category',['category_slug'=>$scategory->slug])}}">
                                            <img src="{{ asset('images/categories') }}/{{$scategory->image}}" alt="{{$scategory->name}}" width="100px" height="auto">
                                        </a>
                                    </li>
                                @endforeach   
              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="semiboxshadow text-center">
                <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2> <span>เลือก</span> บริการที่ต้องการ</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                            @foreach($f_service as $service)
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="{{route('home.service_details',['service_slug'=>$service->slug])}}">
                                        <div class="img-hover">
                                            <img src="{{ asset('images/services/thumbnails') }}/{{$service->thumbnail}}" alt="{{$service->name}}"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{$service->name}}</h3>
                                            <hr class="separator">
                                            <p>{{$service->tagline}}</p>
                                            <div class="content-btn"><a href="{{route('home.service_details',['service_slug'=>$service->slug])}}"
                                                    class="btn btn-primary">Booking Now</a></div>
                                            <div class="price"><span>฿</span><b>From</b>฿{{$service->price}}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info">
                <div class="bg-dark color-white border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="services-lines-info">
                                    <h3>WELCOME TO PETSARAKHAM</h3>
                                    <p class="lead">
                                        The best services at one place.
                                        <span class="line"></span>
                                    </p>

                                    <p>Find a wide variety of online services.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="services-lines">
                                    @foreach($f_categories as $f_category)
                                       <li>
                                            <a href="{{route('home.service_by_category',['category_slug'=>$f_category->slug])}}">
                                                <div class="item-service-line">
                                                    <i class="fa"><img class="icon-img"
                                                            src="{{ asset('images/categories') }}/{{$f_category->image}}" width="100px" height="auto"></i>
                                                    <h5>{{$f_category->name}}</h5>
                                                </div>
                                            </a>
                                        </li> 
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2><span>Groom</span> Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div id="boxes-carousel">
                    @foreach($c_services as $c_service )
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="{{route('home.service_details',['service_slug'=>$c_service->slug])}}">
                                        <div class="img-hover">
                                            <img src="{{ asset('images/services/thumbnails') }}/{{$c_service->thumbnail}}" alt="{{$c_service->name}}"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{$c_service->name}}</h3>
                                            <hr class="separator">
                                            <p>{{$c_service->tagline}}</p>
                                            <div class="content-btn"><a href="{{route('home.service_details',['service_slug'=>$c_service->slug])}}"
                                                    class="btn btn-primary" >รายละเอียด</a></div>
                                            <div class="price"><span>฿</span><b>From</b>฿{{$c_service->price}}</div>
                                        </div>
                                    </a>
                                </div>
                    @endforeach
                
                </div>
            </div>
        </section>
</div>
@push('scripts')
    <script type="text/javascript">
        var path = "{{ route('autocomplete')}}";
        $('input.typeahead').typeahead({
            source: function(query,process){
                return $.get(path,{query:query},function(data){
                    return process(data);
                });
            }
        });

       
    </script>
@endpush