
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
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


@if(isset($product)&&count($product)>0)
<section class="bty-slider">
    <div class="container">
        <div class="owl-carousel owl-theme slider-carousel custom">
                @foreach($product as $key => $value)

                    <div class="item">
                        <div class="">

                            <a href="#"><img alt="Product image" src="{{($value->image)!=null?$value->image:''}}" class="img-responsive center-block" style="height: 180px;width: 170px"></a>
                            {{--<span class="badge">{{$value['sale_prec']}}%</span>--}}
                            <h4 class="text-center">{{$value->title}}</h4>
                            {{--<h5 class="text-center"><p class="item-price text-center"><strike>${{$value['or_price']}}</strike> <b>${{$value['sale_price']}}</b></p></h5>--}}
                            <?php preg_match('!\d+!', $value->price, $matches);?>
                            <h5 class="text-center"><p class="item-price text-center"><b>${{(head($matches))}}</b></p></h5>
                            @if(isset($settings['bottom_nb_ch'])&&$settings['bottom_nb_ch']=='on')
                            <div class="text-center add-cart">
                                <a href="" class=" btn btn-primary " >Add to Cart</a>
                            </div>
                                @endif
                        </div>
                    </div>
                @endforeach
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
@endif
