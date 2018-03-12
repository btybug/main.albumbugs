<?php
    $data = getDinamicStyleForCssFileDemo($slug);
    $file = \App\Http\Controllers\PhpJsonParser::getFileByName($slug);
?>
@if($file)
    {!! useDinamicStyleByPath($file->__toString()) !!}
@endif
<input type="hidden" value="{{json_encode(getDinamicStyleForCssFileDemo($slug),true)}}" class="get_data">

<div class="col-md-12 append_here">

</div>
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
                        <h5>{{explode("{",$style)[0]}}</h5>
                        <div class="this_flex">
                            <textarea class='code_textarea form-control' id="textarea_{{$index}}">{{ $style."}" }}</textarea>
                            <button class="btn btn-danger btn-md remove_this_class" data-slug="{{$slug}}" data-class="{{$style}}">delete</button>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </script>
@endif
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

        // initialize ace editors
            data.map(function(item,indx){
                if(item.length){
                    var name = "editor_" + indx;
                    name = ace.edit("textarea_"+indx);
                    name.setTheme("ace/theme/monokai");
                    name.session.setMode("ace/mode/css");
                    name.setValue(item+"}");
                }
            });
        // end initialize ace editors

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
