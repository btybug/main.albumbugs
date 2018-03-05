<?php
$data_for_select_flag = [
    0 => 'Select class',
    'flag-cl-orange' => 'orange',
    'flag-cl-crimson' => 'crimson',
    'flag-cl-fuchsia' => 'fuchsia',
    'flag-cl-deepskyblue' => 'deepskyblue',
    'flag-cl-black' => 'black',
];
$data_for_select_input = [
    0 => 'Select class',
    'inp-cl-orange' => 'orange',
    'inp-cl-crimson' => 'crimson',
    'inp-cl-fuchsia' => 'fuchsia',
    'inp-cl-deepskyblue' => 'deepskyblue',
    'inp-cl-black' => 'black',
];
$data_for_select_list = [
    0 => 'Select class',
    'list-cl-orange' => 'orange',
    'list-cl-crimson' => 'crimson',
    'list-cl-fuchsia' => 'fuchsia',
    'list-cl-deepskyblue' => 'deepskyblue',
    'list-cl-black' => 'black',
];
?>

<div class="col-md-12">
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#datepickersetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Setting</span>
                </a>
            </div>
            <div id="datepickersetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label> style</label>
                            </div>
                            <div class="col-md-10">
                                {{Form::select("flag_style",$data_for_select_flag,isset($settings["flag_style"]) ? $settings["flag_style"] : null,["class"=>"form-control"])}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label> style</label>
                            </div>
                            <div class="col-md-10">
                                {{Form::select("input_style",$data_for_select_input,isset($settings["input_style"]) ? $settings["input_style"] : null,["class"=>"form-control"])}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label> style</label>
                            </div>
                            <div class="col-md-10">
                                {{Form::select("list_style",$data_for_select_list,isset($settings["list_style"]) ? $settings["flag_style"] : null,["class"=>"form-control"])}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="col-sm-4 control-label text-left">Type:</label>
                            <div class="col-sm-8">
                                <div class="week-day-check">
                                    <div class="customcheck type-radio">
                                        <input type="radio" id="typeinput" name="type">
                                        <label for="typeinput">Text input</label>
                                    </div>
                                    <div class="customcheck type-radio">
                                        <input type="radio" id="typecomponent" name="type">
                                        <label for="typecomponent">Component</label>
                                    </div>
                                    <div class="customcheck type-radio">
                                        <input type="radio" id="typeinline" name="type">
                                        <label for="typeinline">Embedded / inline</label>
                                    </div>
                                    <div class="customcheck type-radio">
                                        <input type="radio" id="typerange" name="type">
                                        <label for="typerange">Range</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Format</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Week start</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="text">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Start date</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">End date</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="text">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Start view</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Min view mode</label>
                            <div class="col-sm-8">
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Max view mode</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Today button</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Clear button</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Language</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Orientation</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Multidate</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="text">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Multidate separator</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="" type="text">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="col-sm-4 control-label text-left">Days of week disabled:</label>
                            <div class="col-sm-8">
                                <div class="week-day-check">
                                    <div class="customcheck">
                                        <input type="checkbox" id="week00" name="">
                                        <label for="week00">0</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="week11" name="">
                                        <label for="week11">1</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="week22" name="">
                                        <label for="week22">2</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="week33" name="">
                                        <label for="week33">3</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="week44" name="">
                                        <label for="week44">4</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="week55" name="">
                                        <label for="week55">5</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="week66" name="">
                                        <label for="week66">6</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="col-sm-4 control-label text-left">Days of week highlighted:</label>
                            <div class="col-sm-8">
                                <div class="week-day-check">
                                    <div class="customcheck">
                                        <input type="checkbox" id="day00" name="">
                                        <label for="day00">0</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="day11" name="">
                                        <label for="day11">1</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="day22" name="">
                                        <label for="day22">2</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="day33" name="">
                                        <label for="day33">3</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="day44" name="">
                                        <label for="day44">4</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="day55" name="">
                                        <label for="day55">5</label>
                                    </div>
                                    <div class="customcheck">
                                        <input type="checkbox" id="day66" name="">
                                        <label for="day66">6</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="calendarweeks" name="">
                                <label for="calendarweeks">Calendar weeks</label>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="autoclose" name="">
                                <label for="autoclose">Autoclose</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="todayhighlight"  name="">
                                <label for="todayhighlight">Today highlight</label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="keyboardnavigation"  name="">
                                <label for="keyboardnavigation">Keyboard navigation</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="forceparse" name="">
                                <label for="forceparse">Force parse</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="beforeshowdaycallback" name="">
                                <label for="beforeshowdaycallback">Before-show-day callback</label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="beforeshowmonthcallback"  name="">
                                <label for="beforeshowmonthcallback">Before-show-month callback</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="beforeshowyearcallback" name="">
                                <label for="beforeshowyearcallback">Before-show-year callback</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="datesdisabled" name="">
                                <label for="datesdisabled">datesDisabled</label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="toggleactive"  name="">
                                <label for="toggleactive">Toggle Active</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customcheck">
                                <input type="checkbox" id="defaultviewdateoption" name="">
                                <label for="defaultviewdateoption">DefaultViewDate option</label>
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
