@extends('btybug::layouts.mTabs',['index'=>'manage_settings'])
@section('tab')




        <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Create
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
                            <button type="button" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



    {!! $html !!}
@stop
@section('CSS')
@stop

@section('JS')
@stop
