{!! HTML::style('public/css/bootstrap/css/bootstrap.min.css') !!}
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
<section class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="preview">
                    <div></div>
                </div>
            </div>
            {!! Form::open() !!}
            <div class="col-md-4 col-xs-12">
                <div class="settings">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Div Class</label>
                        <div class="col-md-4">
                            <input id="textinput" name="class_987978" type="text" placeholder="placeholder" class="form-control input-md">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Div Content</label>
                        <div class="col-md-4">
                            <input id="textinput" name="content_987978" type="text" placeholder="placeholder" class="form-control input-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<textarea cols="200"><?php echo htmlentities('<div class={!! $settings["class_987978"] !!}>{!! $settings["987978"] !!}</div>'); ?></textarea>
    {!! Form::close() !!}
</section>

<script>
    
</script>
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
    section.main{
        margin-top:20px;
    }
    section.main .preview, section.main .settings{
        border: 1px solid #000;
        min-height: 500px;
    }

</style>
