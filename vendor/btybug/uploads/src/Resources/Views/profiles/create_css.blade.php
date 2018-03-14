@extends('btybug::layouts.admin')
@section('content')
    <div class="col-md-12">
        <div class="col-md-12">
            <a href="{!! url(route('uploads_assets_profiles_css')) !!}" class="btn btn-info pull-right">Back</a>
        </div>
        <div class="col-md-12">
            <h2>Generate Css</h2>
            {!! Form::model(null,['url' => route('uploads_assets_profiles_create_css_post')]) !!}
            <div class="form-group">
                {!! Form::label('name','Name') !!}
                {!! Form::text('name',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('files','Files') !!}
                <div class="col-md-12">
                    @if(count($plugins))
                        @foreach( $plugins as $plugin)
                            {{ $plugin->name }} {!! Form::checkbox('files[]',$plugin->id,null) !!}
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Save',['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('CSS')
@stop

@section('JS')
    <script>
        $(document).ready(function () {
            $("body").on("change", ".generate", function () {
                var id = $(this).data('id');
                var name = $(this).attr("name");
                var value = this.checked ? 1 : 0;
                $.ajax({
                    type: "post",
                    url: "{!! url('/admin/framework/generate-main-js') !!}",
                    cache: false,
                    datatype: "json",
                    data: {
                        id: id,
                        name: name,
                        value: value
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("[name=_token]").val()
                    },
                    success: function (data) {
                        if (!data.error) {
                        }
                    }
                });
            })
        });
    </script>
@stop