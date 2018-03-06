<?php
$data_for_select_input = [
    0 => 'Select class',
    'timepic-inp-w-5' => 'width 5%',
    'timepic-inp-w-10' => 'width 10%',
    'timepic-inp-w-25' => 'width 25%',
    'timepic-inp-w-50' => 'width 50%',
    'timepic-inp-w-75' => 'width 75%',
    'timepic-inp-w-100' => 'width 100%',
    'timepic-inp-cl-aliceblue' => 'aliceblue',
    'timepic-inp-cl-gold' => 'gold',
    'timepic-inp-cl-red' => 'red',
    'timepic-inp-cl-blue' => 'blue',
    'timepic-inp-cl-black' => 'black',
];
$languages = [
    'am' => 'am',
    'pm' => 'pm',
    'AM' => 'AM',
    'PM' => 'PM',
    'decimal' => '.',
    'mins' => 'mins',
    'hr' => 'hr',
    'hrs' => 'hrs',
];
$orientation = [
    'l' => 'left',
    'r' => 'right',
    't' => 'top',
    'b' => 'bottom',
];
?>

<div class="col-md-12">
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#timepickersetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Setting</span>
                </a>
            </div>
            <div id="timepickersetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Input style</label>
                            </div>
                            <div class="col-md-10">
                                {{Form::select("input_style",$data_for_select_input,isset($settings["input_style"]) ? $settings["input_style"] : null,["class"=>"form-control"])}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left" for="format">Format</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" id="format" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left" for="timeStep">Step</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" id="timeStep" type="number">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Min Time</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Max Time</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="number">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="col-sm-3 control-label text-left">Disable Time Ranges</label>
                            <div class="col-sm-9">
                                <select class="disableTimeRanges" name="" multiple="multiple">
                                    <option value="am">3:00am</option>
                                    <option value="pm">5:00pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Lang</label>
                            <div class="col-sm-8">
                                {!! Form::select("datepicker_setting[language]",$languages,isset($settings["datepicker_setting"]["language"]) ? $settings["datepicker_setting"]["language"] : null,["class" => "form-control"]) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Orientation</label>
                            <div class="col-sm-8">
                                {!! Form::select("datepicker_setting[orientation]",$orientation,isset($settings["datepicker_setting"]["orientation"]) ? $settings["datepicker_setting"]["orientation"] : null,["class" => "form-control"]) !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="customcheck">
                                    <input type="hidden" name="" value="false">
                                    <input type="checkbox" id="closeOnWindowScroll" name="" value="true">
                                    <label for="closeOnWindowScroll">Close On Window Scroll</label>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="customcheck">
                                    <input type="hidden" name="" value="false">
                                    <input type="checkbox" id="disableTextInput" name="" value="true">
                                    <label for="disableTextInput">Disable Text Input</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="customcheck">
                                    <input type="hidden" name="" value="false">
                                    <input type="checkbox" id="forceRoundTime" name="" value="true">
                                    <label for="forceRoundTime">Force Round Time</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="customcheck">
                                    <input type="hidden" name="" value="false">
                                    <input type="checkbox" id="selectOnBlur" name="" value="true">
                                    <label for="selectOnBlur">Select OnBlur</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="customcheck">
                                    <input type="hidden" name="" value="false">
                                    <input type="checkbox" id="show2400" name="" value="true">
                                    <label for="show2400">Show 2400</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="customcheck">
                                    <input type="hidden" name="" value="false">
                                    <input type="checkbox" id="showDuration" name="" value="true">
                                    <label for="showDuration">Show Duration</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'select2.min.css') !!}

{!! BBscript($_this->path.DS.'js'.DS.'select2.min.js') !!}
<script>
    $(document).ready(function() {
        $('.disableTimeRanges').select2();
    });
</script>