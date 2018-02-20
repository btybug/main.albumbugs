<?php
$user = Auth::user()->toArray();
?>


<div class="col-md-12">
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
                            <select name="" id="" class="form-control">
                                <option value="">style1</option>
                                <option value="">style2</option>
                                <option value="">style3</option>
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
                            <select name="" id="" class="form-control">
                                <option value="">style1</option>
                                <option value="">style2</option>
                                <option value="">style3</option>
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
                                {!! BBbutton2('unit',"pym_shipping","pym_shipping","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$settings]) !!}
                            </div>
                        </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="" id="" class="form-control">
                                <option value="">style1</option>
                                <option value="">style2</option>
                                <option value="">style3</option>
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
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                {!!Form::text('icon',null,['class' => 'form-control icp','readonly'])  !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
                        <div class="col-sm-8">
                            {!!Form::text('url',null,['class' => 'form-control'])  !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="col-sm-4">Style</label>
                        <div class="col-md-8">
                            <select name="" id="" class="form-control">
                                <option value="">style1</option>
                                <option value="">style2</option>
                                <option value="">style3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-danger pull-right"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i></button>
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
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                {!!Form::text('icon',null,['class' => 'form-control icp','readonly'])  !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
                        <div class="col-sm-8">
                            {!!Form::text('url',null,['class' => 'form-control'])  !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="col-sm-4">Style</label>
                        <div class="col-md-8">
                            <select name="" id="" class="form-control">
                                <option value="">style1</option>
                                <option value="">style2</option>
                                <option value="">style3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-danger pull-right"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i></button>
                </div>

            </div>
        </div>
    </div>

</div>


{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}

<script>
    $('.icp').iconpicker();
</script>





