<?php
$countries = DB::table("countries")->get()->pluck(strtolower("name"),"sortname");
?>
<div class="col-md-12">
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#inputsetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Country Settings</span>
                </a>
            </div>
            <div id="inputsetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Container style</label>
                            </div>
                            <div class="col-md-9">
                                <select name="container_class" class="form-control">
                                    <option value="">Select rating</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#inputsetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Exclude countries</span>
                </a>
            </div>
            <div id="inputsetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Select excluded countries</label>
                            </div>
                            <div class="col-md-9">
                                {!! Form::select("excluded_countries[]",$countries,isset($settings["excluded_countries"]) ? $settings["excluded_countries"] : null,["class" => "excl_countries","multiple" => "multiple"]) !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'select2.min.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}

{!! BBscript($_this->path.DS.'js'.DS.'select2.min.js') !!}
<script>
    window.onload = function(){
        $('.excl_countries').select2();
    }
</script>
