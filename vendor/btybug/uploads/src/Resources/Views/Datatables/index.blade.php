@extends('btybug::layouts.admin')
@section('content')
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
        <div class="left-check-table row">
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-1" value="AutoFill-2.2.2">
                <label for="bty-checklefttab-1">AutoFill</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7 sub-left-more" id="bty-checklefttab-2" value="">
                <label for="bty-checklefttab-2">Buttons</label>
                <div class="sub-checkbox-left">
                    <div>
                        <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-2-1" value="">
                        <label for="bty-checklefttab-2-1">Copy</label>
                    </div>
                    <div>
                        <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-2-2" value="">
                        <label for="bty-checklefttab-2-2">Excel</label>
                    </div>
                    <div>
                        <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-2-3" value="">
                        <label for="bty-checklefttab-2-3">PDF</label>
                    </div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7 sub-left-more" id="bty-checklefttab-3" value="ColReorder-1.4.1">
                <label for="bty-checklefttab-3">ColReorder</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-4" value="FixedColumns-3.2.4">
                <label for="bty-checklefttab-4">FixedColumns</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-5" value="FixedHeader-3.1.3">
                <label for="bty-checklefttab-5">FixedHeader</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-6" value="KeyTable-2.3.2">
                <label for="bty-checklefttab-6">KeyTable</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-7" value="Responsive-2.2.1">
                <label for="bty-checklefttab-7">Responsive</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-8" value="RowGroup-1.0.2">
                <label for="bty-checklefttab-8">RowGroup</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-9" value="RowReorder">
                <label for="bty-checklefttab-9">RowReorder-1.2.3</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-10" value="Scroller-1.4.3">
                <label for="bty-checklefttab-10">Scroller</label>
            </div>
            <div>
                <input type="checkbox" class="bty-input-radio-7" id="bty-checklefttab-11"  value="Select-1.2.4">
                <label for="bty-checklefttab-11">Select</label>
            </div>

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
                    {
                        data: '{!! $column !!}', name: '{!! $column !!}'
                    },
                    @endforeach
                ]
            });
        });
    </script>
@stop
<style>
.left-check-table{
    margin-top: 75px !important;
    background-color: #28282c;
    color: #d4d4d4;
}
.left-check-table>div{
    border-bottom: 1px solid #8a8a8a;
    padding: 14px 10px;
    transition: 0.4s ease;
}
.left-check-table>div:hover{
    background-color: #499bc761;
    border-bottom: 1px solid #fff;
}
.left-check-table .bty-input-radio-7 + label:before{
    top: 1px;
    border: 1px solid #fff;
    background: none;
    box-shadow: none;
}
.left-check-table .bty-input-radio-7:checked + label:before{
    background-color:#499bc7;
}
.left-check-table .sub-checkbox-left{
    margin-left: 26px;
    display: none;
}
.left-check-table .sub-checkbox-left>div{
    border-bottom: 1px solid #8a8a8a;
    padding: 5px;
}
.left-check-table .sub-checkbox-left>div:last-child{
    border: none;
}
.left-check-table .sub-left-more:checked +label +.sub-checkbox-left{
    display: block;
}

</style>