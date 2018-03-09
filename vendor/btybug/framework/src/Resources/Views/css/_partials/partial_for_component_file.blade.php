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
@if(isset($data["data"]))
    <script type="template" id="get_for_append">
        @foreach($data["data"] as $index => $classname)
            <div class="class_for_delete">
                @if(isset($style_from_db->html))
                    <div class="col-md-4 parent">
                        {!! $style_from_db->html !!}
                    </div>
                    <div class="col-md-8">
                        <h5>{{$classname}}</h5>
                        <div class="this_flex">
                            <textarea class='code_textarea form-control' readonly>{{ ".".$classname."\t{".$data["codes"][$index]."}" }}</textarea>
                            <button class="btn btn-danger btn-md remove_this_class" data-slug="{{$slug}}" data-class="{{$classname}}">delete</button>
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <h5>{{$classname}}</h5>
                        <div class="this_flex">
                            <textarea class='code_textarea form-control' readonly>{{ ".".$classname."\t{".$data["codes"][$index]."}" }}</textarea>
                            <button class="btn btn-danger btn-md" data-slug="{{$slug}}" data-class="{{$classname}}">delete</button>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </script>
@endif
<script>
    window.onload = function(){
        var html = $("#get_for_append").html();
        $(".append_here").html(html);
        if(html){
            var childs = $(".append_here").children("div.class_for_delete").children("div.parent").children();
            if(childs.length){
                var data = JSON.parse($(".get_data").val());
                data = data.data;
                childs.map(function(index,item){
                    return $(item).addClass(data[index]);
                });
            }
        }
        $("body").delegate(".remove_this_class","click",function () {
            var slug = $(this).data("slug");
            var class_name = $(this).prev().html();
            var _token = $('input[name=_token]').val();
            var that = $(this);
            var url = base_path + "/admin/framework/component/removeclass";
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
    }
</script>
