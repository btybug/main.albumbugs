<?php
$data_for_select = [
    0 => 'Select class',
    'flag-cl-orange' => 'orange',
    'flag-cl-crimson' => 'crimson',
    'flag-cl-fuchsia' => 'fuchsia',
    'flag-cl-deepskyblue' => 'deepskyblue',
    'flag-cl-black' => 'black',
];
$data_for_select = [
    0 => 'Select class',
    'inp-cl-orange' => 'orange',
    'inp-cl-crimson' => 'crimson',
    'inp-cl-fuchsia' => 'fuchsia',
    'inp-cl-deepskyblue' => 'deepskyblue',
    'inp-cl-black' => 'black',
];
$data_for_select = [
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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#selectsetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Setting</span>
                </a>
            </div>
            <div id="selectsetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Flag style</label>
                            </div>
                            <div class="col-md-10">
                                <select name="radio_inp" id="" class="form-control">
                                    <option value="">Select style</option>
                                    <option value="">Style 1</option>
                                    <option value="">Style 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Input style</label>
                            </div>
                            <div class="col-md-10">
                                <select name="radio_inp" id="" class="form-control">
                                    <option value="">Select style</option>
                                    <option value="">Style 1</option>
                                    <option value="">Style 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>List style</label>
                            </div>
                            <div class="col-md-10">
                                <select name="radio_inp" id="" class="form-control">
                                    <option value="">Select style</option>
                                    <option value="">Style 1</option>
                                    <option value="">Style 2</option>
                                </select>
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
