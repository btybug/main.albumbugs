@extends('btybug::layouts.admin')
@section('content')
    <div class="col-md-12">
        <div class="col-md-12">
            <a href="{!! url(route('uploads_assets_profiles_js')) !!}" class="btn btn-info pull-right">Back</a>
        </div>
        <div class="col-md-12">
            {!! Form::model(null,['route' => route('uploads_assets_profiles_create_js_post')]) !!}
                <div class="form-group">
                    
                </div>
                <div class="form-group">

                </div>
            {!! Form::close() !!}
        </div>
    </div>

    @include('btybug::_partials.delete_modal')
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