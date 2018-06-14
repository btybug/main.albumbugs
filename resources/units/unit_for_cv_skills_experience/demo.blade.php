<div class="col-md-9 right">
    <div class="profile-main {{(isset($settings['style'])&& $settings['style'] ) ? $settings['style'] : 'demo-column'}}">
        @if(isset($settings['area1']))
            {!! BBRenderUnits($settings['area1']) !!}
        @endif
        @if(isset($settings['area2']))
            {!! BBRenderUnits($settings['area2']) !!}
        @endif
    </div>
    <div class="clearfix"></div>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'style.css',$_this) !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js',$_this) !!}