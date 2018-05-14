<?php
$user = Auth::user()->toArray();
$image_styles = getDinamicStyle('images');
$text_styles = getDinamicStyle('texts');
$icon_styles = getDinamicStyle('icons');
$menu_styles = getDinamicStyle('menus');
?>


<div class="col-md-12">

    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#menu"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Image style</span>
            </a>
        </div>
        <div id="menu" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="image_style" id="" class="form-control">
                                {!! $image_styles !!}
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#menutitle"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Title</span>
            </a>
        </div>
        <div id="menutitle" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select title</label>
                        </div>
                        <div class="col-md-8">
                            <select name="top_column" id="" class="form-control">
                                @foreach($user as $key => $value)
                                    @if($key == "role")
                                        @continue
                                    @else
                                        <option value="{{$key}}">{{$key}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="top_style" id="" class="form-control">
                                {!! $text_styles !!}
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#menusubtitle"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Subtitle</span>
            </a>
        </div>
        <div id="menusubtitle" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select subtitle</label>
                        </div>
                        <div class="col-md-8">
                            <select name="sub_column" id="" class="form-control">
                                @foreach($user as $key => $value)
                                    @if($key == "role")
                                        @continue
                                    @else
                                        <option value="{{$key}}">{{$key}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="sub_style" id="" class="form-control">
                                {!! $text_styles !!}
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#menu"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Menu</span>
            </a>
        </div>
        <div id="menu" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Menu</label>
                            </div>
                            <div class="col-md-8">
                                {!! BBbutton2('menus','menu_area','frontend','Select Menu',['class'=>'form-control input-md','model'=>$settings]) !!}
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="menu_area_style" id="" class="form-control">
                                {!! $menu_styles !!}
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#placeholder"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Place holder</span>
            </a>
        </div>
        <div id="placeholder" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                @if(isset($settings['icons']))
                    @foreach($settings['icons'] as $key => $value)
                        <div class="form-group lets_each">
                            <div class="col-md-4">
                                <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                        {!!Form::text('icons['.$key.'][icon]',$settings['icons'][$key]['icon'],['class' => 'form-control icp ic','readonly'])  !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
                                <div class="col-sm-8">
                                    {!!Form::text('icons['.$key.'][url]',$settings['icons'][$key]['url'],['class' => 'form-control url'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="col-sm-4">Style</label>
                                <div class="col-md-8">
                                    <select name="icons[{{$key}}][style]" id="" class="form-control style">
                                        {!! $icon_styles !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-danger pull-right remove_this"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-12 prepend_template">
                    <button class="btn btn-primary pull-right render_icons"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#social"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Social</span>
            </a>
        </div>
        <div id="social" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                @if(isset($settings['socials']))
                    @foreach($settings['socials'] as $key => $value)
                        <div class="form-group soc_lets_each">
                            <div class="col-md-4">
                                <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                        {!!Form::text('socials['.$key.'][icon]',$settings['socials'][$key]['icon'],['class' => 'form-control icp soc_ic','readonly'])  !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
                                <div class="col-sm-8">
                                    {!!Form::text('socials['.$key.'][url]',$settings['socials'][$key]['url'],['class' => 'form-control soc_url'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="col-sm-4">Style</label>
                                <div class="col-md-8">
                                    <select name="socials[{{$key}}][style]" id="" class="form-control soc_style">
                                        {!! $icon_styles !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-danger pull-right soc_remove_this"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-12 soc_prepend_template">
                    <button class="btn btn-primary pull-right soc_render_icons"><i class="fa fa-plus"></i></button>
                </div>

            </div>
        </div>
    </div>

</div>

<script type="template" id="temp1">
    <div class="form-group lets_each">
        <div class="col-md-4">
            <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                    {!!Form::text('icons[{repl}][icon]',null,['class' => 'form-control ic icp{repl3}','readonly'])  !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
            <div class="col-sm-8">
                {!!Form::text('icons[{repl1}][url]',null,['class' => 'form-control url'])  !!}
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="col-sm-4">Style</label>
            <div class="col-md-8">
                <select name="icons[{repl2}][style]" id="" class="form-control style">
                    {!! $icon_styles !!}
                </select>
            </div>
        </div>
        <div class="col-md-1">
            <button class="btn btn-danger pull-right remove_this"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="clearfix"></div>
</script>

<script type="template" id="temp2">
    <div class="form-group soc_lets_each">
        <div class="col-md-4">
            <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                    {!!Form::text('socials[{repl}][icon]',null,['class' => 'form-control soc_ic soc_icp{repl3}','readonly'])  !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
            <div class="col-sm-8">
                {!!Form::text('socials[{repl1}][url]',null,['class' => 'form-control soc_url'])  !!}
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="col-sm-4">Style</label>
            <div class="col-md-8">
                <select name="socials[{repl2}][style]" id="" class="form-control soc_style">
                    {!! $icon_styles !!}
                </select>
            </div>
        </div>
        <div class="col-md-1">
            <button class="btn btn-danger pull-right soc_remove_this"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="clearfix"></div>
</script>

{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}

<script>
    $('.icp').iconpicker();
    window.onload = function(){
        var icons_index = {{isset($settings['icons']) ? count($settings['icons']) : 0}};
        $("body").delegate(".render_icons","click",function(){
            var html = $("#temp1").html();
            html = html.replace('{repl}',icons_index).replace('{repl1}',icons_index).replace('{repl2}',icons_index).replace('{repl3}',icons_index);
            $(".prepend_template").before(html);
            $('.icp'+icons_index).iconpicker();
           return icons_index += 1;
        });
        $("body").delegate(".remove_this","click",function(){
            $(this).parent().parent().remove();
            if(icons_index != 0){
                icons_index -= 1;
            }
            $(".lets_each").each(function(index,item){
                $(item).find("input.ic").attr("name",'icons['+index+'][icon]');
                $(item).find("select.style").attr("name",'icons['+index+'][style]');
                $(item).find("input.url").attr("name",'icons['+index+'][url]');
            });
            $("input.url").trigger("keyup");
            return icons_index;
        });

        var soc_icons_index = {{isset($settings['socials']) ? count($settings['socials']) : 0}};
        $("body").delegate(".soc_render_icons","click",function(){
            var html = $("#temp2").html();
            html = html.replace('{repl}',soc_icons_index).replace('{repl1}',soc_icons_index).replace('{repl2}',soc_icons_index).replace('{repl3}',soc_icons_index);
            $(".soc_prepend_template").before(html);
            $('.soc_icp'+soc_icons_index).iconpicker();
            return soc_icons_index += 1;
        });
        $("body").delegate(".soc_remove_this","click",function(){
            $(this).parent().parent().remove();
            if(soc_icons_index != 0){
                soc_icons_index -= 1;
            }
            $(".soc_lets_each").each(function(index,item){
                $(item).find("input.soc_ic").attr("name",'socials['+index+'][icon]');
                $(item).find("select.soc_style").attr("name",'socials['+index+'][style]');
                $(item).find("input.soc_url").attr("name",'socials['+index+'][url]');
            });
            $("input.soc_url").trigger("keyup");
            return soc_icons_index;
        });
    }
</script>





