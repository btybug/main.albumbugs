<div class="profile-main">
    @if(isset($settings['area1']))
        {!! BBRenderUnits($settings['area1']) !!}
    @endif
    @if(isset($settings['area2']))
        {!! BBRenderUnits($settings['area2']) !!}
    @endif
    @if(isset($settings['area3']))
        {!! BBRenderUnits($settings['area3']) !!}
    @endif
</div>
<div class="clearfix"></div>
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js') !!}