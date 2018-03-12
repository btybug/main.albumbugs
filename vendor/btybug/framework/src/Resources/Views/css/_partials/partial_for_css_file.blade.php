<?php
    $data = getDinamicStyleForCssFileDemo($slug);
    $file = \App\Http\Controllers\PhpJsonParser::getFileByName($slug);
?>
<style>
    .m-t-b-21{
        margin-top: 20px;
        margin-bottom: 10px;
    }
</style>
@if($file)
    {!! useDinamicStyleByPath($file->__toString()) !!}
@endif
<input type="hidden" value="{{json_encode(getDinamicStyleForCssFileDemo($slug),true)}}" class="get_data">

<div class="col-md-12 append_here">

</div>
<div class="just_html"></div>
@if(count($data))
    <script type="template" id="get_for_append">
        @foreach($data as $index => $style)
            @if($style)
                <div class="class_for_delete">
                    @if(isset($style_from_db->html))
                        <div class="col-md-4 parent">
                            {!! $style_from_db->html !!}
                        </div>
                    @endif
                    <div class="{{isset($style_from_db->html) ? 'col-md-8' : 'col-md-12'}}">
                        <div class="m-t-b-21">
                            <h5 class="custom_inline_block">{{explode("{",$style)[0]}}</h5>
                            <button class="btn btn-success btn-sm" data-slug="{{$slug}}" data-class="{{$style}}" data-toggle="modal" data-target="#myModalShow">Show</button>
                            <button class="btn btn-warning btn-sm" data-slug="{{$slug}}" data-class="{{$style}}" data-toggle="modal" data-target="#myModalEdit">Edit</button>
                            <button class="btn btn-danger btn-sm remove_this_class" data-slug="{{$slug}}" data-class="{{$style}}">Delete</button>
                        </div>

                        {{--<div class="this_flex">
                            <textarea class='code_textarea form-control' id="textarea_{{$index}}">{{ $style."}" }}</textarea>
                            <button class="btn btn-danger btn-md remove_this_class" data-slug="{{$slug}}" data-class="{{$style}}">delete</button>
                        </div>--}}
                    </div>
                </div>
            @endif
        @endforeach
    </script>
@endif
<div class="modal fade" id="myModalShow" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Show</h4>
            </div>
            <div class="modal-body">
                <p>Show modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="myModalEdit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <p>Edit modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script type="template" id="send_form_for_save">
    {!! Form::open(['url'=>route('save_style'),'method' => 'post',"class" => "submit_form_for_style"]) !!}
    <div class="class_for_delete">
        @if(isset($style_from_db->html))
            <div class="col-md-4 parent">
                {!! $style_from_db->html !!}
            </div>
        @endif
        <div class="{{isset($style_from_db->html) ? 'col-md-8' : 'col-md-12'}}">
            <h5>class</h5>
            <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
            <div class="this_flex">
                <textarea class='code_textarea form-control' id="textarea_editor_for_save" ></textarea>
                <button class="btn btn-danger btn-md custom_cancel">Cancel</button>
                <button class="btn btn-success btn-md" data-slug="{{$slug}}" data-class="{{$style}}">Save</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</script>
<script>
    $(document).ready(function(){
        var html = $("#get_for_append").html();
        $(".append_here").html(html);
        var data = JSON.parse($(".get_data").val());
        if(html){
            var childs = $(".append_here").children("div.class_for_delete").children("div.parent").children();
            if(childs.length){
                childs.map(function(index,item){
                    var class_name = data[index].split("{")[0];
                    class_name = class_name.split(".")[1];
                    return $(item).addClass(class_name);
                });
            }
        }

        /*// initialize ace editors
            data.map(function(item,indx){
                if(item.length){
                    var name = "editor_" + indx;
                    name = ace.edit("textarea_"+indx);
                    name.setTheme("ace/theme/monokai");
                    name.session.setMode("ace/mode/css");
                    name.setValue(item+"}");
                }
            });
        // end initialize ace editors*/

        $("body").delegate(".remove_this_class","click",function () {
            var slug = $(this).data("slug");
            var class_name = $(this).prev().html();
            var _token = $('input[name=_token]').val();
            var that = $(this);
            var url = base_path + "/admin/framework/css-classes/removeclass";
            $.ajax({
                url: url,
                data: {
                    slug:slug,
                    class_name:class_name,
                    _token: _token
                },
                success: function (data) {
                    if(!data.error){
                        return that.parents("div.class_for_delete").remove();
                    }
                    return alert("File does not exists");
                },
                type: 'POST'
            });
        });
    });
</script>
