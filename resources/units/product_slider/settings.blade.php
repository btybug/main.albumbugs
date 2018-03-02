
<?php


$blogs= DB::table('blogs')->pluck('title', 'slug');
//dd($blogs[0]);


?>

<div class="form-group">
    <div class="col-md-6">
        <label for="">Select Blog</label>
    </div>
    <div class="col-md-6" style="margin-bottom:15px">
        <select name="blog" class="form-control">
            <option value="">select option</option>
            @if(count($blogs))
                @foreach($blogs as $key => $blog)
                    <option value="{{$key}}">{{$blog}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>




<hr align="left" width="100%">
<h3>Slider styles</h3>
<div class="col-md-9">
    <select name="slider_stl" id="" class="form-control">
        <option value="">Select slider style</option>
        <option value="style_1">Style 1</option>
        <option value="style_2">Style 2</option>
    </select>
</div><br>
<hr align="left" width="100%">

{{--<h3>Slider images</h3>--}}
{{--<div class="content bty-settings-panel">--}}

    {{--<div class="lang">--}}
        {{--@if(isset($settings['img']))--}}
            {{--@foreach($settings['img'] as $key => $value)--}}
                {{--<div class="form-group lets_each_img">--}}
                    {{--<input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item path" placeholder="Image path" name="img[{{$key}}][path]" value="{{isset($value['path'])?$value['path']:''}}">--}}
                        {{--<input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item pr-name" placeholder="Product name" name="img[{{$key}}][pr_name]" value="{{isset($value['pr_name'])?$value['pr_name']:''}}">--}}
                      {{--<input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item or-price" placeholder="Original price" name="img[{{$key}}][or_price]" value="{{isset($value['or_price'])?$value['or_price']:''}}">--}}
                      {{--<input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item sale-price" placeholder="Sale price" name="img[{{$key}}][sale_price]" value="{{isset($value['sale_price'])?$value['sale_price']:''}}">--}}
                      {{--<input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item sale-prec" placeholder="Sale precentage" name="img[{{$key}}][sale_prec]" value="{{isset($value['sale_prec'])?$value['sale_prec']:''}}">--}}
                      {{--<button class="btn btn-danger remove_this_img"><i class="fa fa-minus"></i></button>--}}
                    {{--</div>--}}
            {{--@endforeach--}}
        {{--@endif--}}
    {{--</div>--}}
    {{--<div class="col-md-12 prepend_template">--}}
        {{--<button class="btn btn-primary pull-right add-img"><i class="fa fa-plus"></i></button>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<hr align="left" width="100%">--}}

{{--<script>--}}
    {{--window.onload = function(){--}}
        {{--var slider_img_index='{{isset($settings['img']) ? count($settings['img']) : 0}}';--}}
        {{--$("body").delegate(".add-img","click",function(){--}}
            {{--var slider_img_div='<div class="form-group lets_each_img">\n' +--}}
                {{--'    <input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item path" placeholder="Image path" name="img['+slider_img_index+'][path]">\n' +--}}
                {{--'    <input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item pr-name" placeholder="Product name" name="img['+slider_img_index+'][pr_name]">\n' +--}}
                {{--'    <input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item or-price" placeholder="Original price" name="img['+slider_img_index+'][or_price]">\n' +--}}
                {{--'    <input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item sale-price" placeholder="Sale price" name="img['+slider_img_index+'][sale_price]">\n' +--}}
                {{--'    <input type="text" style=" width: 129px;float:left;margin-right: 5px;" class="form-control txt-item sale-prec" placeholder="Sale precentage" name="img['+slider_img_index+'][sale_prec]">\n' +--}}
                {{--'    <button class="btn btn-danger remove_this_img"><i class="fa fa-minus"></i></button>\n' +--}}
                {{--'</div>';--}}
            {{--$('.lang').append(slider_img_div);--}}
            {{--slider_img_index++;--}}
            {{--return slider_img_index;--}}
        {{--});--}}

        {{--$("body").delegate(".remove_this_img","click",function(){--}}
            {{--$(this).parent().remove();--}}
            {{--if(slider_img_index != 0){--}}
                {{--slider_img_index -= 1;--}}
            {{--}--}}

            {{--$(".lets_each_img").each(function(index,item){--}}
                {{--$(item).find("input.path").attr("name",'img['+index+'][path]');--}}
                {{--$(item).find("input.pr-name").attr("name",'img['+index+'][pr_name]');--}}
                {{--$(item).find("input.or-price").attr("name",'img['+index+'][or_price]');--}}
                {{--$(item).find("input.sale-price").attr("name",'img['+index+'][sale_price]');--}}
                {{--$(item).find("input.sale-prec").attr("name",'img['+index+'][sale_prec]');--}}
            {{--});--}}
            {{--return slider_img_index;--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}