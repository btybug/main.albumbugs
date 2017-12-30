<style>
    .panel{
        color: #000000!important;
    }

    .bg-primary{
        padding: 2px;
        text-indent: 5px;
    }

    .input-hidden {
        position: absolute;
        left: -9999px;
    }
    input[type=radio] + label>img{
        border: 3px solid transparent;
    }

    input[type=radio]:checked + label>img{
        border-color: #168cba;
    }
</style>

<div class="panel panel-default" style="margin-top: 15px;">
    <div class="panel-heading">General Settings</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="">Signup Title</label>
            <input name="signup_title" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Signup Button Title</label>
            <input name="signup_button_title" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Login Title</label>
            <input name="login_title" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Login Button Title</label>
            <input name="login_button_title" class="form-control" />
        </div>
    </div>
</div>