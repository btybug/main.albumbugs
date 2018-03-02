

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    body {
        background: #e2eaef;
        font-family: "Open Sans", sans-serif;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border-color: transparent;
    }
    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }

</style>
    <?php
    $product = [];
    if (isset($settings["blog"]) && !count($product)) {
        $table = $settings["blog"];
        $slug = implode("_", explode("-", $table));
        if (\Schema::hasTable($slug)) {
            $product = DB::table($slug)->select("*")->get();
            $product = collect($product)->toArray();
        }
    }
    //dd($product[0]->image);
    ?>

    @if(isset($product)&&count($product)>0)
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Featured <b>Products</b></h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            @foreach(array_chunk($product,4) as $key=>$setting)
                                <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}"></li>
                            @endforeach
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            @foreach(array_chunk($product,4) as $key=>$setting)
                                <div class="item carousel-item {{$key==0?'active':''}}">
                                    <div class="row">
                                        @foreach ($setting as $value)

                                            <div class="col-sm-3">
                                                <div class="thumb-wrapper">
                                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                    <div class="img-box">
                                                        <img src="{{$value->image}}" class="img-responsive img-fluid" alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <h4>{{$value->title}}</h4>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        {{--<p class="item-price"><strike>${{$value['or_price']}}</strike> <b>${{$value['sale_price']}}</b></p>--}}
                                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

{{--@if(isset($settings['img'])&&count($settings['img'])>0)--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<h2>Featured <b>Products</b></h2>--}}
            {{--<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">--}}
                {{--<!-- Carousel indicators -->--}}
                {{--<ol class="carousel-indicators">--}}
                    {{--@foreach(array_chunk($settings['img'],4) as $key=>$setting)--}}
                    {{--<li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}"></li>--}}
                        {{--@endforeach--}}
                {{--</ol>--}}
                {{--<!-- Wrapper for carousel items -->--}}
                {{--<div class="carousel-inner">--}}
                    {{--@foreach(array_chunk($settings['img'],4) as $key=>$setting)--}}
                            {{--<div class="item carousel-item {{$key==0?'active':''}}">--}}
                                {{--<div class="row">--}}
                                    {{--@foreach ($setting as $value)--}}
                                    {{--<div class="col-sm-3">--}}
                                        {{--<div class="thumb-wrapper">--}}
                                            {{--<span class="wish-icon"><i class="fa fa-heart-o"></i></span>--}}
                                            {{--<div class="img-box">--}}
                                                {{--<img src="{{$value['path']}}" class="img-responsive img-fluid" alt="">--}}
                                            {{--</div>--}}
                                            {{--<div class="thumb-content">--}}
                                                {{--<h4>{{$value['pr_name']}}</h4>--}}
                                                {{--<div class="star-rating">--}}
                                                    {{--<ul class="list-inline">--}}
                                                        {{--<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
                                                        {{--<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
                                                        {{--<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
                                                        {{--<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
                                                        {{--<li class="list-inline-item"><i class="fa fa-star-o"></i></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                                {{--<p class="item-price"><strike>${{$value['or_price']}}</strike> <b>${{$value['sale_price']}}</b></p>--}}
                                                {{--<a href="#" class="btn btn-primary">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                        {{--@endforeach--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
        {{--</div>--}}
                {{--<!-- Carousel controls -->--}}
                {{--<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">--}}
                    {{--<i class="fa fa-angle-left"></i>--}}
                {{--</a>--}}
                {{--<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">--}}
                    {{--<i class="fa fa-angle-right"></i>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
{{--@endif--}}
    <script type="text/javascript">
        $(document).ready(function(){
            $(".wish-icon i").click(function(){
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });
    </script>