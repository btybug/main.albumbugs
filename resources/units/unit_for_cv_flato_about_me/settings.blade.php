@option('aboutme','f',$data)
<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Image Url</label>
            </div>
            <div class="col-md-8">
                {!! Form::text('image_url', null,['class'=>'form-control ']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Image Width</label>
            </div>
            <div class="col-md-8">
                {!! Form::number('image_width', null,['class'=>'form-control ']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Name</label>
            </div>
            <div class="col-md-8">
                {!! Form::text('name', null,['class'=>'form-control ']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Speciality</label>
            </div>
            <div class="col-md-8">
                {!! Form::text('spec', null,['class'=>'form-control ']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">City</label>
            </div>
            <div class="col-md-8">
                {!! Form::text('city', null,['class'=>'form-control ']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">About Me</label>
            </div>
            <div class="col-md-8">
                {!! Form::textarea('about_me', null,['class'=>'form-control ']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption




