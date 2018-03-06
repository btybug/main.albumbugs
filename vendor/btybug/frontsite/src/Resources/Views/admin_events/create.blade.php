@extends( 'btybug::layouts.admin' )
@section( 'content' )
    <div class="container-fluid">
       <div class="col-md-12">
           <div class="bb-form-header">
               <div class="row">
                   <div class="col-md-4">
                       <label>Event name</label>
                       {!! Form::text('name',null,['class' => 'form-name', 'placeholder' => 'Form Name']) !!}
                   </div>
                   <div class="col-md-8">
                       <button type="submit" class="form-save pull-right" bb-click="saveHTML">Save</button>
                   </div>
               </div>
           </div>

           <div class="panel panel-default p-0 boxpanelminheight">
               <div class="panel-heading">1. Select Trigger</div>
               <div class="panel-body">
                   <div class="col-md-4" style="    min-height: 100%;border: 1px solid;padding: 5px;">
                       <div class="col-md-12 item-event">
                           User Login
                       </div>
                       <div class="col-md-12 item-event">
                           Form Submit
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>


@stop

@section('CSS')
    {!! HTML::style('public/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('public/css/themes-settings.css') !!}
    {!! Html::style("public/css/form-builder/form-builder.css?m=m") !!}

    <style>
        .item-event {
            padding: 5px;
            background: aqua;
            cursor: pointer;
            margin-bottom: 5px;
        }
.nav-listing{
    background: #337ab7;
    border-radius: 12px;
    padding-bottom: 14px;
    margin: 3px;
}
    </style>

@stop
@section('JS')
    {!! HTML::script('public/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('public/js/events/event-new-setting.js') !!}
@stop