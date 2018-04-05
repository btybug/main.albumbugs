@extends('btybug::layouts.mTabs',['index'=>'manage_settings'])
@section('tab')




    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal"><i
                class="fa fa-plus"></i>Create
        New Connection
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Client Data</h4>
                    </div>
                    <div class="modal-body form-horizontal">

                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Name</label>
                                <div class="col-md-5">
                                    <input id="name" name="name" type="text" placeholder=""
                                           class="form-control input-md">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="provider">Provider</label>
                                <div class="col-md-5">
                                    <input id="provider" name="provider" type="text" placeholder=""
                                           class="form-control input-md">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="client_id">Client ID</label>
                                <div class="col-md-5">
                                    <input id="client_id" name="client_id" type="text" placeholder=""
                                           class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="client_secret">Client Secret</label>
                                <div class="col-md-5">
                                    <input id="client_secret" name="client_secret" type="text" placeholder=""
                                           class="form-control input-md">

                                </div>
                            </div>

                        </fieldset>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="create_connection">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Provider</th>
            <th scope="col">Client IDD</th>
            <th scope="col">Client Secret</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($connections as $connection)
            <tr>
                <th scope="row">{!! $connection->id !!}</th>
                <td>{!! $connection->name !!}</td>
                <td>{!! $connection->provider !!}</td>
                <td>{!! $connection->client_id !!}</td>
                <td>{!! $connection->client_secret !!}</td>
                <td><a href="javascript::void(0)" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{--{!! $html !!}--}}
@stop
@section('CSS')
@stop

@section('JS')
    <script>
        $(function () {
            $('#create_connection').on('click', function () {
                var data = $('form').serialize();
                $.ajax({
                    url: '{!! route('frontsite_api_settings_save') !!}',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data.error) {
                            alert(data.messages);
                        } else {
                            location.reload();
                        }
                    },
                    type: 'POST'
                });
            });
        });
    </script>
@stop
