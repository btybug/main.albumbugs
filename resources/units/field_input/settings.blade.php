<div class="col-md-12">
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#inputsetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Input Setting</span>
                </a>
            </div>
            <div id="inputsetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">

                        <div class="col-md-6">
                            <label for="valid" class="col-sm-3 m-0 control-label text-left">Validation Rules</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('validation',null,['class'=>'form-control','id'=>'valid']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

</div>
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
<script>
    $('.icp').iconpicker();
</script>