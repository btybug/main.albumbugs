<?php
$data_for_select = [
    0 => 'Select class',
    'upl-btn-bg-cl-black' => 'black',
    'upl-btn-bg-cl-grey' => 'gray',
    'upl-btn-bg-cl-skyblue' => 'skyblue',
    'upl-btn-bg-cl-darksalmon' => 'darksalmon',
    'upl-btn-bg-cl-deeppink' => 'deeppink',
    'upl-btn-bg-cl-fuchsia' => 'fuchsia',
    'upl-btn-bg-cl-brown' => 'brown',
    'upl-btn-bg-cl-red' => 'red',
    'upl-btn-bg-cl-cyan' => 'cyan',
    'upl-btn-bg-cl-lightcoral' => 'lightcoral',
    'upl-btn-bg-cl-darkorange' => 'darkorange',
    'rem-btn-bg-cl-forestgreen' => 'forestgreen',
    'upl-btn-bg-cl-yellow' => 'yellow',
    'upl-btn-bg-cl-crimson' => 'crimson',
    'rem-btn-bg-cl-deepskyblue' => 'deepskyblue',
    'upl-btn-bg-cl-darkblue' => 'darkblue',
    'upl-btn-bg-cl-peru' => 'peru',
    'upl-btn-bg-cl-orange' => 'orange',
];
?>

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
                    <div class="form-group col-md-12">
                        <div class="col-md-2">
                            <label>Field style</label>
                        </div>
                        <div class="col-md-9">
                            <select name="radio_inp" id="" class="form-control">
                                <option value="">Select rating</option>
                                <option value="">Style 1</option>
                                <option value="">Style 2</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="lablename" class="col-sm-3 p-l-0 control-label m-0  text-left">Label
                                name</label>
                            <div class="col-sm-8">
                                {!! Form::text('label',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="fieldicon" class="col-sm-3 p-l-0 control-label m-0 text-left">Field Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('icon',null,['class' => 'form-control icp'])  !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tooltip-icon" class="col-sm-3 m-0 control-label text-left">Tooltip Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('tooltip_icon',null,['class' => 'form-control icp','id'=>'tooltip-icon'])  !!}

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="help" class="col-sm-3 m-0 control-label text-left">help</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('help',null,['class'=>'form-control','id'=>'help']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for='validation_message' class="col-sm-3 m-0 control-label text-left">Error
                                Message</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('validation_message',null,['class' => 'form-control','id'=>'validation_message']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row visibility-box {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#uploadsettings"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Settings</span>
                </a>
            </div>
            <div id="uploadsettings" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Show Upload</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="manual_item">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow Images</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="upload_setting[allowedPreviewTypes][]" value="image" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Images extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedPreviewMimeTypes][]" multiple="multiple">
                                        <option value="image/png">PNG</option>
                                        <option value="image/jpeg">JPG</option>
                                        <option value="image/jpeg">JPEG</option>
                                        <option value="image/gif">GIF</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Image Size</label>
                                <div class="col-sm-4">
                                    <input type="number" name="upload_setting[previewSettings][image][size]" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Unlimitted upload</label>
                                <div class="col-sm-2">
                                    <div class="input-checkbox-5-bty">
                                        <input type="checkbox" id="unlimupload">
                                        <label for="unlimupload"></label>
                                    </div>
                                </div>
                                <label class="col-sm-3 control-label text-right">No of images</label>
                                <div class="col-sm-4">
                                    <input type="number" name="upload_setting[previewSettings][image][maxFileCount]" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow video</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="video" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Video extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="AVI">AVI</option>
                                        <option value="MP4">MP4</option>
                                        <option value="Mov">Mov</option>
                                        <option value="Mkv">Mkv</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Video Size</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <label class="col-sm-2 control-label text-right">No of video</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow music</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="audio" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Music extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="mp3">mp3</option>
                                        <option value="m4a">m4a</option>
                                        <option value="mv3">mv3</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Music Size</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <label class="col-sm-2 control-label text-right">No of music</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow docs</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="text" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Docs extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="pdf">pdf</option>
                                        <option value="ZIP">ZIP</option>
                                        <option value="txt">txt</option>
                                        <option value="docx">docx</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Docs Size</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <label class="col-sm-2 control-label text-right">No of docs</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow Download</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-5-bty">
                                    <input type="hidden" name="upload_setting[fileActionSettings][showDownload]" value="false">
                                    <input type="checkbox" id="setdownload" name="upload_setting[fileActionSettings][showDownload]" value="true" {{isset($settings["upload_setting"]["fileActionSettings"]["showDownload"]) ? 'checked' : ''}}>
                                    <label for="setdownload"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-sm-7 control-label text-left">Total maximum size to upload</label>
                                <div class="col-sm-3">
                                    <input type="number" min="0" max="1024" name="upload_setting[maxFileSize]" value="{{isset($settings["upload_setting"]["maxFileSize"]) ? $settings["upload_setting"]["maxFileSize"] : ''}}" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <strong>MB</strong>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row visibility-box {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#uploadbesic"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title"> Basic</span>
                </a>
            </div>
            <div id="uploadbesic" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Browse Button</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="hidden" name="upload_setting[showBrowse]" value="false">
                                    <input type="checkbox" name="upload_setting[showBrowse]" value="true" {{isset($settings["upload_setting"]["showBrowse"]) && $settings["upload_setting"]["showBrowse"]=='true' ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                       {{-- <div class="col-md-8 checkBlock {{isset($settings["upload_setting"]["showBrowse"]) && $settings["upload_setting"]["showBrowse"]=='true' ? '' : 'custom_hidden'}}">
                            <div class="col-md-4">
                                <label class="control-label text-left">Title</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Icon</label>
                                <div>
                                    {!!Form::text('star_setting[filledStar]',isset($settings["star_setting"]["filledStar"])?$settings["star_setting"]["filledStar"]:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Class</label>
                                <div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select class</option>
                                        <option value="br-btn-bg-cl-black">black</option>
                                        <option value="br-btn-bg-cl-grey">grey</option>
                                        <option value="br-btn-bg-cl-skyblue">skyblue</option>
                                        <option value="br-btn-bg-cl-darksalmon">darksalmon</option>
                                        <option value="br-btn-bg-cl-deeppink">deeppink</option>
                                        <option value="br-btn-bg-cl-fuchsia">fuchsia</option>
                                        <option value="br-btn-bg-cl-brown">brown</option>
                                        <option value="br-btn-bg-cl-red">red</option>
                                        <option value="br-btn-bg-cl-cyan">cyan</option>
                                        <option value="br-btn-bg-cl-lightcoral">lightcoral</option>
                                        <option value="br-btn-bg-cl-darkorange">darkorange</option>
                                        <option value="br-btn-bg-cl-forestgreen">forestgreen</option>
                                        <option value="br-btn-bg-cl-yellow">yellow</option>
                                        <option value="br-btn-bg-cl-crimson">crimson</option>
                                        <option value="br-btn-bg-cl-deepskyblue">deepskyblue</option>
                                        <option value="br-btn-bg-cl-darkblue">darkblue</option>
                                        <option value="br-btn-bg-cl-peru">peru</option>
                                        <option value="br-btn-bg-cl-orange">orange</option>
                                    </select>
                                </div>
                            </div>

                        </div>--}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Upload Button</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="hidden" name="upload_setting[fileActionSettings][showUpload]" value="false" class="checkClick">
                                    <input type="checkbox" name="upload_setting[fileActionSettings][showUpload]" value="true" class="checkClick" {{isset($settings["upload_setting"]["fileActionSettings"]["showUpload"]) && $settings["upload_setting"]["fileActionSettings"]["showUpload"]=='true' ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock {{isset($settings["upload_setting"]["fileActionSettings"]["showUpload"]) && $settings["upload_setting"]["fileActionSettings"]["showUpload"]=='true' ? '' : 'custom_hidden'}}">
                            <div class="col-md-4">
                                <label class="control-label text-left">Title</label>
                                <div>
                                    <input type="text" name="upload_setting[fileActionSettings][uploadTitle]" value="{{isset($settings['upload_setting']['fileActionSettings']['uploadTitle']) ? $settings['upload_setting']['fileActionSettings']['uploadTitle'] : ''}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Icon</label>
                                <div>
                                    {!!Form::text('upload_setting[fileActionSettings][uploadIcon]',isset($settings['upload_setting']['fileActionSettings']['uploadIcon'])?$settings['upload_setting']['fileActionSettings']['uploadIcon']:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Class</label>
                                <div>
                                    {!! Form::select("upload_setting[fileActionSettings][uploadClass]",$data_for_select,isset($settings["upload_setting"]["fileActionSettings"]["uploadClass"]) ? $settings["upload_setting"]["fileActionSettings"]["uploadClass"] : null,["class" => "form-control"]) !!}
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Remove Button</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="hidden" name="upload_setting[fileActionSettings][showRemove]" value="false" class="checkClick">
                                    <input type="checkbox" name="upload_setting[fileActionSettings][showRemove]" value="true" class="checkClick" {{isset($settings["upload_setting"]["fileActionSettings"]["showRemove"]) && $settings["upload_setting"]["fileActionSettings"]["showRemove"] == 'true' ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock {{isset($settings["upload_setting"]["fileActionSettings"]["showRemove"]) && $settings["upload_setting"]["fileActionSettings"]["showRemove"]=='true' ? '' : 'custom_hidden'}}">
                            <div class="col-md-4">
                                <label class="control-label text-left">Title</label>
                                <div>
                                    <input type="text" class="form-control" name="upload_setting[fileActionSettings][removeTitle]" value="{{isset($settings['upload_setting']['fileActionSettings']['removeTitle']) ? $settings['upload_setting']['fileActionSettings']['removeTitle'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Icon</label>
                                <div>
                                    {!!Form::text('upload_setting[fileActionSettings][removeIcon]',isset($settings["upload_setting"]["fileActionSettings"]["removeIcon"])?$settings["upload_setting"]["fileActionSettings"]["removeIcon"]:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Class</label>
                                <div>
                                    {!! Form::select("upload_setting[fileActionSettings][removeClass]",$data_for_select,isset($settings["upload_setting"]["fileActionSettings"]["removeClass"]) ? $settings["upload_setting"]["fileActionSettings"]["removeClass"] : null,["class" => "form-control"]) !!}
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Caption</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="hidden" name="upload_setting[showCaption]" value="false">
                                    <input type="checkbox" id="showcaption" value="true" name="upload_setting[showCaption]" {{isset($settings['upload_setting']['showCaption']) ? 'checked' : ''}}>
                                    <label for="showcaption"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Cancel</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="hidden" name="upload_setting[showCancel]" value="false">
                                    <input type="checkbox" id="showCancel" name="upload_setting[showCancel]" value="true" {{isset($settings['upload_setting']['showCancel']) ? 'checked' : ''}}>
                                    <label for="showCancel"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Preview</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="hidden" value="false" name="upload_setting[showPreview]">
                                    <input type="checkbox" id="showpreview" value="true" name="upload_setting[showPreview]" {{isset($settings['upload_setting']['showPreview']) ? 'checked' : ''}}>
                                    <label for="showpreview"></label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Upload</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="hidden" value="false" name="upload_setting[showUpload]">
                                    <input type="checkbox" id="showupload" value="true" name="upload_setting[showUpload]" {{isset($settings['upload_setting']['showUpload']) ? 'checked' : ''}}>
                                    <label for="showupload"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Remove</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="hidden" value="false" name="upload_setting[showRemove]">
                                    <input type="checkbox" id="showremove" value="true" name="upload_setting[showRemove]" {{isset($settings['upload_setting']['showRemove']) ? 'checked' : ''}}>
                                    <label for="showremove"></label>
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
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
{!! BBscript($_this->path.DS.'js'.DS.'select2.min.js') !!}
<script>
    $('.icpp').iconpicker();
    $( document ).ready(function() {
        $('.extensions-multiple').select2();
        var checkClick = $('.checkClick');
        var checkBlock = $('.checkBlock');
        checkClick.on('click', function() {
            if($(this).is(':checked')) {
                $(this).closest('.form-group').find(checkBlock).removeClass("custom_hidden");
            } else {
                $(this).closest('.form-group').find(checkBlock).addClass("custom_hidden");
            }
        });

    });
</script>