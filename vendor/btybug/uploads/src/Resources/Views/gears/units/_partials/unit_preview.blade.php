<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {!! HTML::script("public/js/jquery-2.1.4.min.js") !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

{{--    {!! HTML::script("public/js/bootstrap.js?v=".rand('1111','9999')) !!}--}}
    {{--{!! BBCss()  !!}--}}
    {!! HTML::style("public/css/font-awesome/css/font-awesome.min.css") !!}
    {!! HTML::style("public/js/jquery-ui/jquery-ui.min.css") !!}
    {!! HTML::style("public/css/preview-template.css?v=".rand('1111','9999')) !!}
    {!! HTML::style('public/css/cms.css') !!}
    {!! HTML::style('public-x/custom/css/'.str_replace(' ','-',$ui->slug).'.css') !!}
</head>

<body>
{!! csrf_field() !!}
@include('resources::assests.magicModal')
<div class="container-fluid">
    <div class="body_ui corepreviewSetting previewcontent activeprevew" data-settinglive="content"
         id="widget_container">
        {!! $htmlBody !!}
    </div>
</div>
<div class="Settings_ui coresetting animated bounceInRight" data-settinglive="settings" hidden>
    <div class="container-fluid">
        <a href="#" class="btn btn-danger close-settings-panel"><i class="fa fa-close"></i></a>
        {!! Form::model($settings,['url'=>'/admin/uploads/gears/settings/'.$id, 'id'=>'add_custome_page','files'=>true]) !!}
        <input name="itemname" type="hidden" data-parentitemname="itemname"/>
        {!! $htmlSettings !!}
        {!! Form::close() !!}
    </div>
</div>


<button data-settingaction="save" class="hide" id="settings_savebtn"></button>
<input type="hidden" id="hidden_data" value='{!!$settings_json!!}'>
{!! BBMainFrontJS() !!}
{!! HTML::script("public/js/UiElements/bb_styles.js?v.5") !!}
{!! HTML::script("public/js/UiElements/ui-preview-setting.js?v=".rand('1111','9999')) !!}
{!! HTML::script("public/js/UiElements/ui-settings.js?v=".rand('1111','9999')) !!}
@if(isset($ui))
    {!! HTML::script('public-x/custom/js/'.str_replace(' ','-',$ui->slug).'.js') !!}
@endif
</body>