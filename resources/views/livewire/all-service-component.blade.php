<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1> All Service</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li> All Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="container">
                <div class="row" style="margin-top: -30px;">
                    <div class="titles">
                        <h2>All <span>Services</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -50px;">
                <div class="row">
                    <div class="col-md-12" >
                        <ul class="services-lines full-services">
                            @foreach($services as $service)
							<div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                        style="padding-right: 5px;padding-left: 5px;">
                                        <a class="g-list" href="{{route('home.service_details',['service_slug'=>$service->slug])}}">
                                            <div class="img-hover">
												<div class="mx-auto my-auto" style="width: auto; height:300px; ">
                                                <img src="{{ asset('images/services/thumbnails')}}/{{$service->thumbnail}}" width="350px" height="250px" alt="{{$service->name}}"
                                                    class="img-responsive">
												</div>
                                            </div>
                                            <div class="info-gallery">
                                                <h3>{{$service->name}}</h3>
                                                <hr class="separator">
                                                <p>{{$service->tagline}}</p>
                                                <div class="content-btn"><a href="{{route('home.service_details',['service_slug'=>$service->slug])}}"
                                                        class="btn btn-primary">Booking Now</a></div>
                                                <div class="price"><span>฿</span><b>From</b>{{$service->price}}</div>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="container" col-md-12>
                        <div class="wrap-pagination-info">
                            {{$services->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info content_resalt">
                <div class="container">
                    <div class="row">
                        <div class="titles">
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
