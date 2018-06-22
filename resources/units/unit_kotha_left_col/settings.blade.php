<?php
$text_styles = getDinamicStyle('texts');
?>
@option('user','f',$data)
<div class="settings-right-col">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">User</label>
            </div>
            <div class="col-md-8">
                <select name="" id="" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">User Text</label>
            </div>
            <div class="col-md-8">
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#social"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Social</span>
                </a>
            </div>
            <div id="social" class="collapse in" aria-expanded="true" >
                <div class="bty-settings-panel">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                            <input class="form-control icp" name="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
                                    <div class="col-sm-8">
                                        <input class="form-control soc_url" name="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="col-sm-4">Style</label>
                                    <div class="col-md-8">
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-danger pull-right soc_remove_this"><i class="fa fa-minus"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endoption
@option('user','s',$data)
<div class="settings-right-col">
    <div class="col-md-12">

        <div class="form-group">
            <div class="col-md-4">
                <label for="">User Style</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('user_style', $text_styles, null, ['class'=>'form-control'])!!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Text Style</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('text_style', $text_styles, null, ['class'=>'form-control'])!!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption
@option('instagram','f',$data)
<div class="settings-right-col">
    <div class="col-md-12">

        <div class="form-group">
            <div class="col-md-4">
                <label for="">Token</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="token">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
<script>
    $('.icp').iconpicker();
</script>