@extends('btybug::layouts.mTabs',['index'=>'upload_profile'])
@section('tab')
    <div class="col-md-12">
        <div class="col-md-12">
            <a href="{!! url(route('uploads_assets_profiles_create_js')) !!}" class="btn btn-warning pull-right">add new</a>
        </div>
        <h2>JS</h2>

        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Files</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($plugins))
                    @foreach($plugins as $item)
                        <tr>
                            <td>{!! $item->name !!}</td>
                            <td>{!! BBGetUserName($item->author_id) !!}</td>
                            <td>No Files</td>
                            <td>
                                <a href="javascript:void(0)" data-link="{!! $item->file_name !!}" data-id="{!! $item->id !!}" class="btn btn-info update-live">Update</a>
                                <a data-href="{!! url('admin/uploads/assets/delete') !!}"
                                   data-key="{!! $item->id !!}" data-type="{{ $item->type.' '.$item->name }}"
                                   class="delete-button btn btn-danger"><i
                                            class="fa fa-trash-o f-s-14 "></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td rowspan="5">No js profiles</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

    @include('btybug::_partials.delete_modal')
@stop

@section('CSS')
@stop

@section('JS')
    <script>
        $(document).ready(function () {
            $("body").on("change",".generate",function () {
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