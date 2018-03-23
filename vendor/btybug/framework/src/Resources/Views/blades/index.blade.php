<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') !!}
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js"
            integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
            integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
            crossorigin="anonymous"></script>

    {!! HTML::script('public/js/jquery-3.2.1.min.js') !!}

    {!! HTML::style("public/libs/jspanel/jspanel.min.css") !!}
    {!! HTML::script("public/libs/jspanel/jspanel.min.js") !!}

    {!! HTML::style("public/libs/autocomplete/easy-autocomplete.min.css") !!}
    {!! HTML::style("public/libs/autocomplete/easy-autocomplete.themes.min.css") !!}
    {!! HTML::script("public/libs/autocomplete/jquery.easy-autocomplete.min.js") !!}

    {!! HTML::script('public/js/framework/he.js') !!}
    {!! HTML::style('public/js/framework/framework.css?rnd='. rand(999,9999)) !!}

    <title>Document</title>
    <script>
        var ajaxUrl = {
            frameworkUrl: '{!! url("admin/framework") !!}/'
        };
    </script>
</head>
<body class="container-fluid d-flex flex-column h-100 align-items-center px-0">

<header class="w-100">
    <div class="container-fluid">
        <div class="head-btn">
            <button class="btn btn-success btn-sm excecte">Excecte</button>
            <button class="btn btn-warning btn-sm">Ace</button>
            <button class="btn btn-danger btn-sm">Import</button>
            <button class="btn btn-info btn-sm">Export</button>
        </div>
    </div>
</header>
<div class="row grow w-100">
    <div class="col-7 p-2">
        <div class="h-50 pb-1">
            <div class="preview-area"></div>
        </div>
        <div class="h-50 pt-1">
            <div id="code-editor"></div>
        </div>
    </div>
    <div class="col-5 h-100 px-0 d-flex flex-column">
        <div class="php-code-item">
            PHP Code
            <div class="controls">
                <a href="#" bb-click="mainPHPCodeEdit"><i class="fas fa-code"></i></a>
                <a href="#" class="outline-btn" bb-click="mainPHPCodeDiscard" hidden>Discard</a>
                <a href="#" class="outline-btn" bb-click="mainPHPCodeSave" hidden>Save</a>
            </div>
        </div>

        <div class="node-php-code-item" hidden>
            <span id="current-node-text">H2</span>
            <div class="controls">
                <a href="#" class="outline-btn" bb-click="nodePHPCodeDiscard">Discard</a>
                <a href="#" class="outline-btn" data-to-index="0" bb-click="nodePHPCodeSave">Save</a>
            </div>
        </div>

        <div class="tree-area h-100">
            <!-- Tree List -->
            <ul class="tree-list"></ul>

            <!-- Main PHP Editor -->
            <div class="code-editor-area h-100" hidden>
                <div class="code-editor-bar">
                    <input type="text" id="search-code" placeholder="Search code">
                </div>
                <div id="php-code-editor"></div>
            </div>

            <!-- Node PHP Editor -->
            <div class="node-code-editor-area h-100" hidden>
                <div class="node-code-editor-bar">
                    <select class="node-code-position custom-select float-left">
                        <option>Content</option>
                        <option>title</option>
                        <option>alt</option>
                        <option>src</option>
                        <option>Attribute</option>
                    </select>

                    <input type="text" id="custom-attribute" placeholder="attribute" class="float-left"
                           style="width: 110px">

                    <select class="node-code-select custom-select float-left">
                        <option value="$user->id">id</option>
                        <option value="$user->username">username</option>
                        <option value="$user->email">email</option>
                        <option value="$user->address">address</option>
                    </select>

                    <a href="#" class="btn btn-warning btn-sm add-code" bb-click="addCode"><i
                                class="fas fa-plus"></i></a>
                </div>
                <div id="php-node-code-editor"></div>
            </div>

            <div class="inserted-code" hidden></div>
        </div>
    </div>
</div>
<div class="row w-100">
    <div class="col-12 p-0">
        <div class="style-studio">
            <h4>Styling</h4>
            <div class="style-studio-container">
                <div id="bb-css-studio" class="bb-css-studio no-active"></div>
            </div>
        </div>
    </div>
</div>

@include('console::structure.templates.studio')

<input type="hidden" id="renderUrl" value="{!! route('blades_live_render') !!}">
{!! csrf_field() !!}

<script type="template" id="bbt-controls">
    <div class="controls">
        <a href="#" bb-click="editPHPCode"><i class="fas fa-code"></i></a>
        <a href="#" bb-click="editPHPCode"><i class="fas fa-edit"></i></a>
    </div>
</script>

<script type="template" id="bbt-php-panel">
    <div class="php-panel-header mt-1 mb-2">
        <select name="" id="" class="form-control">
            <option value="">PHP Editor</option>
            <option value="">Select Shortcode</option>
        </select>
    </div>

    <div id="php-code-editor"></div>
</script>

{!! HTML::script('public/js/ace-editor/ace.js') !!}
{!! HTML::script('public/js/framework/framework.js?rnd='. rand(999,9999)) !!}
</body>
</html>




