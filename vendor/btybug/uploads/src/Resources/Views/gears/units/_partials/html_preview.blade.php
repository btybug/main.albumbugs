<!DOCTYPE html>
<html lang="en">
<head>
    {!! HTML::script("public/js/jquery-2.1.4.min.js") !!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {!! HTML::style('public-x/custom/css/'.str_replace(' ','-',$ui->slug).'.css') !!}
</head>

<body>
{!! csrf_field() !!}
<div class="container-fluid">
    <div class="body_ui corepreviewSetting previewcontent activeprevew" data-settinglive="content"
         id="widget_container">
        {!! $htmlBody !!}
    </div>
</div>
{!! BBMainFrontJS() !!}
{!! HTML::script("public/js/UiElements/bb_styles.js?v.5") !!}
{!! HTML::script("public/js/UiElements/ui-preview-setting.js?v=".rand('1111','9999')) !!}
{!! HTML::script("public/js/UiElements/ui-settings.js?v=".rand('1111','9999')) !!}
@if(isset($ui))
    {!! HTML::script('public-x/custom/js/'.str_replace(' ','-',$ui->slug).'.js') !!}
@endif
</body>
</html>