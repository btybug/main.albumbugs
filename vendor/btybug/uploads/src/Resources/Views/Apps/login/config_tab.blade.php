<div class="col-md-12">
    <div class="form-group">
        <label>
            Table: <b>users</b>
        </label>

    </div>
    <div class="col-md-12">
        <label>Type: <b>GET</b></label>

    </div>
    @php
        $columns = BBGetTableColumn('users')
    @endphp
    <div class="col-md-12 cols-box">
        <label>Select Columns For Return</label>
        <div class="columns">
            @foreach($columns as $col)
                {{ $col }} {!! Form::checkbox("columns[$col]",null) !!}
            @endforeach
        </div>
    </div>
</div>

{!! BBstyle("public/css/select2/select2.min.css") !!}
{!! BBstyle(modules_path("uploads/src/Resources/Views/Apps/general/assets/cssgeneral_css.css")) !!}

{!! BBscript('public/js/select2/select2.full.min.js') !!}
{!! BBscript(modules_path("uploads/src/Resources/Views/Apps/general/assets/js/general_js.js")) !!}