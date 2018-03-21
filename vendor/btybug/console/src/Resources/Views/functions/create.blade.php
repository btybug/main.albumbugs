@extends('btybug::layouts.admin')
@section('content')
    {!! Form::model(null,[]) !!}
    <div class="bb-form-header">
        <div class="row">
            <div class="col-md-4">
                <label>Function name</label>
                {!! Form::text('name',null,['class' => 'form-name', 'placeholder' => 'Fn Name']) !!}
            </div>
            <div class="col-md-8">
                <button type="submit" class="form-save pull-right" bb-click="saveHTML">Save</button>
            </div>
        </div>
    </div>

    <div class="row m-b-10">
        <h3>Create Function</h3>

        <div class="col-md-12">
            <div class="form-group">
                <label>
                    Select Table
                </label>
                {!! Form::select('table',['' => 'Select'] + BBGetTables(),null,['class' => 'form-control custom_table']) !!}
            </div>
            <div class="form-group">
                <label>
                    Select Row
                </label>
                {!! Form::select('row',['' => 'Select'] +
                ['single' => 'specific row / rows','filtered' => 'Filtered row / rows'],null,['class' => 'form-control custom_row']) !!}
            </div>
            <div class="form-group">
                <div class="options-box hide">
                    <div class="cust-group append_here">

                    </div>
                    <a href="javascript:void(0)" class="btn btn-md btn-info pull-right add_new_field"><i class=" fa fa-plus"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group hide number-box">
                <label>
                    How Many number of row you want ?
                </label>
                {!! Form::number('count',null,['class' => 'form-control','min' => 1]) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
@section('CSS')
    {!! Html::style("public/css/form-builder/form-builder.css?m=m") !!}
    {!! HTML::style("public/css/bty.css") !!}
    <style>
        .cust-group > .form-group {
            box-shadow: 0 0 4px #ccc;
            padding: 20px 0;
        }

    </style>
@stop
@section('JS')
    <script>
        window.onload = function () {
            function Generator() {
            };

            Generator.prototype.rand = Math.floor(Math.random() * 26) + Date.now();

            Generator.prototype.getId = function () {
                return this.rand++;
            };
            var idGen = new Generator();

            $("body").on( "change",".custom_row", function () {
                var table_name = $(".custom_table").val();
                if (table_name !== '') {
                    $(".options-box").removeClass("hide");
                    $(".options-box").addClass("show");
                    $(".number-box").removeClass("hide");
                    $(".number-box").addClass("show");
                } else {
                    $(".options-box").removeClass("show");
                    $(".options-box").addClass("hide");
                    $(".number-box").removeClass("show");
                    $(".number-box").addClass("hide");
                    $(".append_here").html('');
                }
            });

            $("body").on("change", ".custom_table", function () {
                var table_name = $(this).val();
                if (table_name !== '') {
                    $(".options-box").removeClass("hide");
                    $(".options-box").addClass("show");
                    $(".number-box").removeClass("hide");
                    $(".number-box").addClass("show");
                } else {
                    $(".options-box").removeClass("show");
                    $(".options-box").addClass("hide");
                    $(".number-box").removeClass("show");
                    $(".number-box").addClass("hide");
                    $(".append_here").html('');
                }
            });

            $("body").delegate(".add_new_field", "click", function () {
                var table_name = $(".custom_table").val();
                if (table_name) {
                    $.ajax({
                        type: "post",
                        url: "{!! url('/admin/console/functions/options') !!}",
                        cache: false,
                        datatype: "json",
                        data: {
                            table_name: table_name,
                            slug: idGen.getId()
                        },
                        headers: {
                            'X-CSRF-TOKEN': $("[name=_token]").val()
                        },
                        success: function (data) {
                            if (!data.error) {
                                $(".append_here").append(data.html);
                            }
                        }
                    });
                }
            });
            $("body").delegate(".remove_this_field", "click", function () {
                return $(this).parent().parent().remove();
            });
        }
    </script>
@stop

