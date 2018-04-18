@php
    $indentificator=uniqid();
    $variation = null;
        if($value){
            switch ($type){
                case 'layouts':
                $obj=   \Btybug\btybug\Models\ContentLayouts\ContentLayouts::findByVariation($value);
                if($obj){
                    $variation= \Btybug\btybug\Models\ContentLayouts\ContentLayouts::findVariation($value);
                }
                break;
                case 'unit':
                $obj=\Btybug\btybug\Models\Painter\Painter::findByVariation($value);
                if($obj){
                    $variation = $obj->variations(false)->find($value);
                }
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
        <button type="button" data-value="{!! $value !!}" data-strcuture="{!! $structure !!}"
                data-action={!! $type !!}  data-key="{!! $indentificator !!}" {!! $atributes !!} >Change
        </button>
    </div>

    <a
        @if(isset($obj) && isset($variation)&& is_object($obj) && is_object($variation))
           @if($type == 'units')
                href='{{ "/admin/uploads/gears/settings/".$variation->id }}'
           @else
                href='{{ "/admin/uploads/layouts/settings/".$obj->slug.'.'.$structure }}'
           @endif
            target="_blank"
       @else
             href="javascript:void(0)"
       @endif
       data-type="{{ $type }}"
       data-strcuture="{!! $structure !!}"
       class="btn btn-info customize-button pull-left" style="border-radius: 0px;">Customize
    </a>
    <input
            class="bb-button-realted-hidden-input"
            type="hidden" {!! $array !!}
            value="{!! $value !!}"
            data-name="{!! $indentificator !!}"
            name="{!! $hiddenName !!}"/>
</div>