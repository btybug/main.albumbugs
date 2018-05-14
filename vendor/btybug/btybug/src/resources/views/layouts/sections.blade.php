<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') !!}


    {!! HTML::script('public/js/jquery-3.2.1.min.js') !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    {!! HTML::style("public/libs/jspanel/jspanel.min.css") !!}
    {!! HTML::script("public/libs/jspanel/jspanel.min.js") !!}

    {!! HTML::style("public/libs/autocomplete/easy-autocomplete.min.css") !!}
    {!! HTML::style("public/libs/autocomplete/easy-autocomplete.themes.min.css") !!}
    {!! HTML::script("public/libs/autocomplete/jquery.easy-autocomplete.min.js") !!}

    {!! HTML::script("public/libs/beautify/beautify-html.js") !!}

    {!! HTML::script('public/js/framework/he.js') !!}
    {!! HTML::style('public/js/framework/framework.css?rnd='. rand(999,9999)) !!}

    <title>Layout Customizer</title>
    <script>
        var ajaxUrl = {
            frameworkUrl: '{!! url("admin/framework") !!}/'
        };
    </script>

    @yield('CSS')
    @stack('css')
</head>
<body class="container-fluid d-flex flex-column h-100 align-items-center px-0">

<!-- CSS Output style -->
<style id="bbcc-custom-style"></style>

<header class="w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @if(isset($variation))
                    <input type="hidden" id="itemname" value="{!! $variation->title !!}">
                    <div class="form-control form-control-sm">{!! $variation->title !!}</div>
                @else
                    <input type="text" class="form-control form-control-sm" id="itemname" placeholder="itemname" value="">
                @endif
            </div>
            <div class="col-3">
                {!! Form::select('copy_data',['' =>'Select Variation'] + BBgetContentLayoutVariationsPluck($model),null,['class' => 'form-control form-control-sm','id' => 'copy_data']) !!}
            </div>
            <div class="col-6">
                <div class="head-btn">
                    <button class="btn btn-danger btn-sm" data-settingaction="console">Console</button>
                    <button class="btn btn-success btn-sm" data-settingaction="save"> Save</button>
                    @if($variation && ! $variation->used_in)
                        <button class="btn btn-primary btn-sm" id="save-us" data-settingaction="save-as"> Save as</button>
                    @endif
                    @if($model->self_type == "page_sections")
                        <a href="{!! url("/admin/uploads/gears/page-sections/variations/$model->slug") !!}" class="btn btn-warning btn-sm">Close</a>
                    @else
                        <a href="{!! url("/admin/uploads/units/units-variations/$model->slug") !!}" class="btn btn-warning">Close</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
<div class="row grow w-100">
    <div class="col-12 p-0">
        <div class="h-100 d-flex flex-column">
            @yield('content')
        </div>
    </div>
</div>
<div class="row w-100">
    <div class="col-12 p-0">
        <div class="style-studio">
            <h4>
                <span id="current-node-text">SELECT ELEMENT</span>
                <a href="#" class="outline-btn" bb-click="nodePHPCodeLoop">
                    <i class="fa fa-plus"></i>  Loop
                </a>

                <a href="#" class="outline-btn" data-to-index="0" bb-click="nodePHPCodeSave" hidden>Save</a>

                <a href="#" class="float-right closeCSSEditor" bb-click="closeCSSEditor" hidden><i class="fa fa-arrow-down"></i></a>
                <a href="#" class="float-right openCSSEditor" bb-click="openCSSEditor" hidden><i class="fa fa-arrow-up"></i></a>
            </h4>
            <div class="style-studio-container">
                <div class="container-fluid">
                    <div class="row h-100">
                        <div class="col px-0 d-flex flex-column" style="max-width: 250px;background: #484848;">
                            <div class="node-code-editor-bar">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col px-0 pr-1">
                                            <select class="node-code-position custom-select float-left">
                                                <option>Content</option>
                                                <option>title</option>
                                                <option>alt</option>
                                                <option>src</option>
                                                <option>Attribute</option>
                                            </select>
                                        </div>
                                        <div class="col px-0 pr-1 custom-attribute" style="max-width: 110px;" hidden>
                                            <input type="text" id="custom-attribute" placeholder="attribute" class="float-left">
                                        </div>
                                        <div class="col px-0" style="max-width: 35px;">
                                            <i class="fas fa-plus btn btn-warning btn-sm add-code" bb-click="addCode"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inserted-code" hidden></div>
                        </div>
                        <div class="col px-0 d-flex" style="background-color: #373638;">
                            <div id="bb-css-studio" class="bb-css-studio hidable-panel" hidden></div>
                            <div id="php-node-code-editor" class="hidable-panel" hidden></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('resources::assests.stylesModal')
@include('resources::assests.magicModal')
<div class="modal fade" id="save-as-variation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Save as</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Enter Name</label>
                    </div>
                    <div class="col-md-8">
                        <input name="new_name" class="form-control" id="new_name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save-as-submit">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@include('console::structure.templates.studio')

<input type="hidden" id="renderUrl" value="{!! route('blades_live_render') !!}">
{!! csrf_field() !!}

{!! HTML::script('public/js/ace-editor/ace.js') !!}
{!! HTML::script('public/js/framework/framework.js?rnd='. rand(999,9999)) !!}
<input name="token" type="hidden" value="{{ csrf_token() }}" id="token"/>

{!! HTML::script("public/js/jquery-ui/jquery-ui.min.js") !!}
{!! HTML::script('public-x/custom/js/'.uniqid().'.js') !!}

@yield('JS')
@stack('javascript')
</body>
</html>




