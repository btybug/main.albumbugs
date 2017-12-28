@extends('btybug::layouts.admin')
@section('content')
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
        <div class="checkbox">
            <label><input type="checkbox" value="autoFill">AutoFill</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Buttons</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="colReorder" >ColReorder</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="fixedColumns" >FixedColumns</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="fixedHeader" >FixedHeader</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="keys" >KeyTable</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="Responsive-2.2.1" >Responsive</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="RowGroup-1.0.2" >RowGroup</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="RowReorder" >RowReorder-1.2.3</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="Scroller-1.4.3" >Scroller</label>
        </div>
        <div class="checkbox ">
            <label><input type="checkbox" value="Select-1.2.4" >Select</label>
        </div>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <table id="users-table" class="table table-striped table-bordered" cellspacing="0" width="500px">
            <thead>
            <tr>
                @foreach($columns as $column)
                    <th>{!! $column !!}</th>
                 @endforeach
            </thead>
        </table>
    </div>
@stop
@section('JS')
    <script>
        $(function () {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                autoFill: true,
                colReorder:true,
                ajax: '{!! route('dynamic_datatable',$table) !!}',
                dom: 'Bfrtip',
                columnDefs: [
                    {
                        targets: 1,
                        className: 'noVis'
                    }
                ],
                buttons: [
                    {
                        extend: 'colvis',
                        columns: ':not(.noVis)'
                    }
                ]
                , colReorder: {
                    realtime: false
                },
                columns: [
                @foreach($columns as $column)
                    {data: '{!! $column !!}', name: '{!! $column !!}'},
                @endforeach
                ]
            });
        });
    </script>
@stop