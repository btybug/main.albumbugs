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

    {!! HTML::style("public/libs/jspanel/jspanel.min.css") !!}
    {!! HTML::script("public/libs/jspanel/jspanel.min.js") !!}

    <title>Document</title>
    <style>
        header {
            background-color: black;
            padding: 15px 0;
        }

        header .head-btn {
            width: 100%;
            text-align: right;
            margin-right: 50px;
        }

        section.main {
            margin-top: 20px;
        }

        section.main .preview, section.main .settings {
            border: 1px solid #000;
            min-height: 500px;
        }

        .ace_editor{
            height:100%;
            flex: 1;
        }
        .set_border{
            border: 2px solid #FF0000;
        }
        .custom_inline_block{
            display:inline-block;
        }

        .studio-container{
            background: #e7e7e7;
        }

        .full-height {
            height: calc(100vh - 61px);
        }

        .tree-area {
            background: #3d3d3d;
        }

        .preview-area {
            height: 100%;
            padding: 10px;
            background: #fff;
            border-bottom: 10px solid #e7e7e7;
            border-top: 10px solid #e7e7e7;
            position: relative;
            overflow: scroll;
        }

        .preview-area:empty:before {
            content: "Code Preview";
            width: 100%;
            height: 100%;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
            line-height: 120px;
            text-transform: uppercase;
            color: #afafaf;
            font-size: 18px;
        }

        .tree-list{
            list-style: none;
            margin: 0;
            padding: 10px;
        }

        .node-content {
            background: #4b9bc7;
            margin-bottom: 10px;
            color: #fff;
            padding: 6px 10px;
        }

        .tree-list li {
            list-style: none;
        }

        .controls {
            float: right;
        }

        .controls a {
            color: #fff;
            margin-left: 10px;
        }
    </style>
    <script>
        var codeEditor;
    </script>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="head-btn">
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
                <ul class="tree-list"></ul>
            </div>
        </div>
    </div>
</div>

<script type="template" id="bbt-controls">
    <div class="controls">
        <a href="#" bb-click="editCode"><i class="fas fa-code"></i></a>
        <a href="#" bb-click="editCode"><i class="fas fa-edit"></i></a>
    </div>
</script>

{!! HTML::script('public/js/jquery-3.2.1.min.js') !!}
{!! HTML::script('public/js/ace-editor/ace.js') !!}
<script>
$(function () {
    codeEditor = ace.edit("code-editor");
    codeEditor.setTheme("ace/theme/monokai");
    codeEditor.session.setMode("ace/mode/html");
});
</script>
{!! HTML::script('public/js/framework/framework.js?rnd='. rand(0,10)) !!}
</body>
</html>




