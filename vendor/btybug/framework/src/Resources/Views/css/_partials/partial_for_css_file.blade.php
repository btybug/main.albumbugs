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
            @if(isset($style_from_db->html))
                <div class="col-md-4 parent">
                    {!! $style_from_db->html !!}
                </div>
                <div class="col-md-8">
                    <h5>{{$classname}}</h5><textarea class='code_textarea form-control' readonly>{!! ".".$classname."{".$data["codes"][$index]."}" !!}</textarea>
                </div>
            @else
                <div class="col-md-12">
                    <h5>{{$classname}}</h5><textarea class='code_textarea form-control' readonly>{!! ".".$classname."{".$data["codes"][$index]."}" !!}</textarea>
                </div>
            @endif
        @endforeach
    </script>
@endif
<script>
    window.onload = function(){
        var html = $("#get_for_append").html();
        $(".append_here").html(html);
        if(html){
            var childs = $(".append_here").children("div.parent").children();
            if(childs.length){
                var data = JSON.parse($(".get_data").val());
                data = data.data;
                childs.map(function(index,item){
                    return $(item).addClass(data[index]);
                });
            }
        }
    }
</script>
