<?php
$user = Auth::user()->toArray();
?>
<div class="col-md-12">
    <div class="form-group">
        <label for="">Select column for title</label>
        <select name="top_column" id="" class="form-control">
            @foreach($user as $key => $value)
                @if($key == "role")
                    @continue
                @else
                    <option value="{{$key}}">{{$key}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Select column for subtitle</label>
        <select name="top_column" id="" class="form-control">
            @foreach($user as $key => $value)
                @if($key == "role")
                    @continue
                @else
                    <option value="{{$key}}">{{$key}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-12 m-b-10">
        <div class="col-md-5">
            <label for="fieldicon" class="col-sm-4 control-label text-left">Field Icon</label>
            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                    {!!Form::text('icon',null,['class' => 'form-control icp','readonly'])  !!}
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <label for="fieldicon" class="col-sm-4 control-label text-left">Field Url</label>
            <div class="col-sm-8">
                {!!Form::text('url',null,['class' => 'form-control'])  !!}
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-danger pull-right"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i></button>
    </div>
</div>
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
<script>
    $('.icp').iconpicker();
</script>





