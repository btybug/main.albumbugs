{!! Form::model($model,['id'=>'add_custome_page','url' => route('uploads_page_layouts_settings_post',[$page_id,$variation])]) !!}
<h3 id="main-box-title"></h3>
<div>
    {!! $preview !!}
</div>
{!! Form::close() !!}