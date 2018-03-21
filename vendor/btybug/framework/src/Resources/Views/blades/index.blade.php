<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') !!}
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    {!! HTML::script('public/js/jquery-3.2.1.min.js') !!}

    {!! HTML::style("public/libs/jspanel/jspanel.min.css") !!}
    {!! HTML::script("public/libs/jspanel/jspanel.min.js") !!}

    {!! HTML::style("public/libs/autocomplete/easy-autocomplete.min.css") !!}
    {!! HTML::style("public/libs/autocomplete/easy-autocomplete.themes.min.css") !!}
    {!! HTML::script("public/libs/autocomplete/jquery.easy-autocomplete.min.js") !!}

    {!! HTML::style('public/js/framework/framework.css?rnd='. rand(999,9999)) !!}

    <title>Document</title>
    <script>
        var codeEditor,
            phpCodeEditor;
    </script>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="head-btn">
                <button class="btn btn-success btn-sm excecte">Excecte</button>
                <button class="btn btn-warning btn-sm">Ace</button>
                <button class="btn btn-danger btn-sm">Import</button>
                <button class="btn btn-info btn-sm">Export</button>
            </div>
        </div>
    </div>
</header>
<div class="studio-container container-fluid">
    <div class="row">
        <div class="col-md-7">
            <div class="full-height">
                <div class="h-50">
                    <div class="preview-area"></div>
                </div>
                <div class="h-50">
                    <div id="code-editor"></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="full-height tree-area">
                <div class="php-code-item">
                    PHP Code
                    <div class="controls">
                        <a href="#" bb-click="mainPHPCodeEdit"><i class="fas fa-code"></i></a>
                        <a href="#" class="outline-btn" bb-click="mainPHPCodeDiscard" hidden>Discard</a>
                        <a href="#" class="outline-btn" bb-click="mainPHPCodeSave" hidden>Save</a>
                    </div>
                </div>

                <!-- Tree List -->
                <ul class="tree-list"></ul>

                <!-- Main PHP Editor -->
                <div class="code-editor-area" hidden>
                    <div class="code-editor-bar">
                        <input type="text" id="search-code" placeholder="Search code">
                    </div>
                    <div id="php-code-editor"></div>
                </div>

                <!-- Node PHP Editor -->
                <div class="node-code-editor-area" hidden>
                    <div class="code-editor-bar">
                        <select class="float-left">
                            <option value="">Content</option>
                            <option value="">Attribute</option>
                        </select>
                        <input type="text" placeholder="Custom attribute" class="float-left">
                        <input type="text" id="search-code" placeholder="Search code">
                        <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i></a>
                    </div>
                    <div id="php-node-code-editor"></div>
                </div>

                <div class="inserted-code">
                    <div class="content-item">
                        Content
                        <div class="controls">
                            <a href="#" bb-click="editPHPCode"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="attribute-item">
                        Attribute: Title
                        <div class="controls">
                            <a href="#" bb-click="editPHPCode"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="attribute-item">
                        Attribute: Class
                        <div class="controls">
                            <a href="#" bb-click="editPHPCode"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script>
$(function () {
    codeEditor = ace.edit("code-editor");
    codeEditor.setTheme("ace/theme/monokai");
    codeEditor.session.setMode("ace/mode/php");
    codeEditor.getSession().setUseWrapMode(true);

    phpCodeEditor = ace.edit("php-code-editor");
    phpCodeEditor.setTheme("ace/theme/monokai");
    phpCodeEditor.session.setMode("ace/mode/php");
    phpCodeEditor.getSession().setUseWrapMode(true);
    phpCodeEditor.$blockScrolling = Infinity;

    // phpCodeEditor = ace.edit("php-node-code-editor");
    // phpCodeEditor.setTheme("ace/theme/monokai");
    // phpCodeEditor.session.setMode("ace/mode/php");
    // phpCodeEditor.getSession().setUseWrapMode(true);
    // phpCodeEditor.$blockScrolling = Infinity;
});
</script>
{!! HTML::script('public/js/framework/framework.js?rnd='. rand(999,9999)) !!}
</body>
</html>




