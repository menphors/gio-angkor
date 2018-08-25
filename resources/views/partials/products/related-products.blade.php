<div class="row">
    <div class="col-lg-12">
        <div class="well">
            <div id="{{$slideId || 'mySlider'}}" class="carousel slide">

                <ol class="carousel-indicators">
                    <li data-target="#{{$slideId}}" data-slide-to="0" class="active"></li>
                    <li data-target="#{{$slideId}}" data-slide-to="1"></li>
                    <li data-target="#{{$slideId}}" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">

                    @foreach($products->chunk(4) as $index => $product4)
                        <div class="item @if($index == 0) active @endif">
                            <div class="row-fluid">
                                @foreach($product4 as $product)
                                    <div class="span3">
                                        <a href="{{asset('product/' . $product->id)}}" class="thumbnail">
                                            <img src="{{asset('uploads/' . $product->gallery)}}" alt="Image"
                                                 style="max-width:100%;"/>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    {{--<div class="item active">--}}
                    {{--<div class="row-fluid">--}}
                    {{--<div class="span3" ><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-blue.jpg')}}" alt="Image" style="max-width:100%;"/></a></div>--}}
                    {{--<div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-white.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>--}}
                    {{--<div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-blue.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>--}}
                    {{--<div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-gray.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>--}}
                    {{--</div><!--/row-fluid-->--}}
                    {{--</div>--}}

                    {{--<div class="item">--}}
                    {{--<div class="row-fluid">--}}
                    {{--<div class="span3" ><a href="#x" class="thumbnail"><img id= "writeinfo" src="uploads" alt="Image" style="max-width:100%;"/></a></div>--}}
                    {{--</div><!--/row-fluid-->--}}
                    {{--</div><!--/item-->--}}

                </div><!--/carousel-inner-->
                <a class="left carousel-control" href="#{{$slideId}}" data-slide="prev">&lt;</a>
                <a class="right carousel-control" href="#{{$slideId}}" data-slide="next" id="right">&gt;</a>
            </div><!--/myCarousel-->
        </div><!--/well-->
    </div>
</div>