@if($field->type)
    @if($field->type == "text" or $field->type == "textarea")
        <div class="col-md-8">
            <div class="form-group">
                <label class="col-sm-3 p-l-0" for="default_value_field">Default value</label>
                <div class="col-md-6">
                    {!! Form::text('default_value', null, ['class' => 'form-control','placeholder' => 'Enter default value', 'id' => 'default_value_field']) !!}
                </div>
            </div>
        </div>
    @else
        <div class="col-md-8">
            <div class="form-group">
                <label class="col-xs-4 col-md-4 control-label" for="name">Data Source</label>
                <div class="col-xs-8 col-md-8">
                    <!-- check if Data source is data-source -->
                    {!! Form::select('data_source',[
                     ''=>'-- Select Data source --',
                     'manual'=>'Manual',
                     'api'=>'From api',
                     'related'=>'Related',
                     'bb'=>'BB Functions',
                     'file'=>'File'], null,['class'=>'form-control','id'=>'data_source']) !!}
                </div>
            </div>
            <div class="select_op_box">
                @if($field->data_source == 'manual')
                    <div class="form-group data_source_manual">
                        {!! Form::textarea('settings[manual]',null,['class' => 'form-control','id' => 'data_source_manual']) !!}
                    </div>
                @endif
                @if($field->data_source == 'related')
                    <div class="form-group data-source-box">
                        <label class="col-md-4 control-label" for="bbfunction">Select Table</label>
                        <div class="col-md-4">
                            {!! Form::select('settings[data_source_table_name]',['' => 'Select Table'], null,['class' => 'form-control','id' => 'data_source_table_name']) !!}
                        </div>
                    </div>
                    <div class="form-group columns_list hide">
                        <label class="col-md-4 control-label" for="bbfunction">Select Column</label>
                        <div class="col-md-4">
                            {!! Form::select('settings[data_source_columns]',['' => 'Select Column'] , null,['class' => 'form-control','id' => 'table_column']) !!}
                        </div>
                    </div>
                @endif


                <div class="form-group hide">
                    <label class="col-xs-4 col-md-4 control-label" for="selectbasic">Files</label>
                    <div class="col-xs-8 col-md-8">
                        {!! BBbutton('files','file-unit','Select File',['class' => 'btn btn-warning btn-md input-md','data-type' => 'files','model' => null]) !!}
                    </div>
                </div>
                {{--<div class="data-source-box">--}}
                {{--@if(isset($settings['data_source_type_val']))--}}
                {{--<div class="form-group file-box">--}}
                {{--<div class="col-xs-8 col-md-offset-4">--}}
                {{--{!! Form::select('data_source_type_val',['' => 'Select Data Value'] + (array)\App\helpers\FieldHelper::getHeading($settings['file-unit']),$settings['data_source_type_val'],['class' => 'form-control','id' =>'data_source_type_val']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--@endif--}}
                {{--@if(isset($settings['data_source_type_key']))--}}
                {{--<div class="form-group file-box">--}}
                {{--<div class="col-xs-8 col-md-offset-4">--}}
                {{--{!! Form::select('data_source_type_key',['' => 'Select Data Key'] + (array)\App\helpers\FieldHelper::getHeading($settings['file-unit']),$settings['data_source_type_key'],['class' => 'form-control','id' =>'data_source_type_key']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--@if(isset($settings['data_source_type_default']))--}}
                {{--<div class="form-group file-box">--}}
                {{--<div class="col-xs-8 col-md-offset-4">--}}
                {{--{!! Form::select('data_source_type_default', ['' => 'Select Default'] + (array)\App\helpers\FieldHelper::getPluck($settings['file-unit'],$settings['data_source_type_key']),$settings['data_source_type_default'],['class' => 'form-control','id' =>'data_source_type_default']) !!}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--@endif--}}
                {{--@endif--}}
                {{--</div>--}}
            </div>
        </div>
    @endif
@endif