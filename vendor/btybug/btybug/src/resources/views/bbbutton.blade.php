@php
    $indentificator=uniqid();
        if($value){
            switch ($type){
                case 'layouts':
                $obj=Btybug\btybug\Models\ContentLayouts\ContentLayouts::findByVariation($value);
                $variation=Btybug\btybug\Models\ContentLayouts\ContentLayouts::findVariation($value);
                break;
                case 'unit':
                $obj=\Btybug\btybug\Models\Painter\Painter::findByVariation($value);
                $variation = $obj->variations()->find($value);
                break;
            }
        }

@endphp
<div class="input-group">
    <div class="input-group-addon">{!! $text !!}</div>
    <input type="text"
           data-key="title"
           data-toggle="popover"
           readonly="readonly"
           data-id="{!! $indentificator !!}"
           class="page-layout-title form-control"
           title="info"
           style="width: 100%; background: #fff;"
           @if(isset($obj) && isset($variation)&& is_object($obj) && is_object($variation))
           value="{!! $obj->title !!}"
           data-content="
                   Type:{!! $type !!}
                   Name:{!! $obj->title !!}
                   Author:{!! $obj->author !!}
                   Uploaded:{!! BBgetDateFormat($obj->created_at) !!}
                   Variation:{!! $variation->title !!}
           @if(isset($variation->updated_at))
                   Last Modification:{!!BBgetDateFormat($variation->updated_at) !!}
           @endif
                   "
           @else
           value="Nothing Selected!!!"
            @endif
    >
    <div class="input-group-addon">
        <button type="button" data-action={!! $type !!}  data-key="{!! $indentificator !!}" {!! $atributes !!} >Change
        </button>
    </div>
    <input
            class="bb-button-realted-hidden-input"
            type="hidden" {!! $array !!}
            value="{!! $value !!}"
            data-name="{!! $indentificator !!}"
            name="{!! $hiddenName !!}"/>
</div>