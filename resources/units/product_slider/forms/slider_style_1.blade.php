
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<section class="bty-slider">
    <div class="container">
        <div class="owl-carousel owl-theme slider-carousel custom">

            @if(isset($product)&&count($product)>0)
                @foreach($product as $key => $value)

                    <div class="item">
                        <div class="">

                            <a href="#"><img alt="Product image" src="{{($value->image)!=null?$value->image:''}}" class="img-responsive center-block" style="height: 180px;width: 170px"></a>
                            {{--<span class="badge">{{$value['sale_prec']}}%</span>--}}
                            <h4 class="text-center">{{$value->title}}</h4>
                            {{--<h5 class="text-center"><p class="item-price text-center"><strike>${{$value['or_price']}}</strike> <b>${{$value['sale_price']}}</b></p></h5>--}}
                            {{--<div class="text-center add-cart">--}}
                                {{--<a href="" class=" btn btn-primary " >Add to Cart</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                @endforeach
            @endif

            {{--@if(isset($settings['img'])&&count($settings['img'])>0)--}}
                {{--@foreach($settings['img'] as $key => $value)--}}
                    {{--<div class="item">--}}
                        {{--<div class="">--}}
                            {{--<a href="#"><img src="{{$value['path']}}" class="img-responsive center-block" style="height: 180px;width: 170px"></a>--}}
                            {{--<span class="badge">{{$value['sale_prec']}}%</span>--}}
                            {{--<h4 class="text-center">{{$value['pr_name']}}</h4>--}}
                            {{--<h5 class="text-center"><p class="item-price text-center"><strike>${{$value['or_price']}}</strike> <b>${{$value['sale_price']}}</b></p></h5>--}}
                            {{--<div class="text-center add-cart">--}}
                                {{--<a href="" class=" btn btn-primary " >Add to Cart</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--@endif--}}
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>

