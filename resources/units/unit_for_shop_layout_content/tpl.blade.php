@if(isset($settings['area1']))
    {!! BBRenderUnits($settings['area1']) !!}
@endif

@if(isset($settings['area2']))
    {!! BBRenderUnits($settings['area2']) !!}
@endif
@if(isset($settings['area3']))
    {!! BBRenderUnits($settings['area3']) !!}
@endif
<div class="container">
    @if(isset($settings['area4']))
        {!! BBRenderUnits($settings['area4']) !!}
    @endif

    @if(isset($settings['area5']))
        {!! BBRenderUnits($settings['area5']) !!}
    @endif

    @if(isset($settings['area6']))
        {!! BBRenderUnits($settings['area6']) !!}
    @endif

    @if(isset($settings['area7']))
        {!! BBRenderUnits($settings['area7']) !!}
    @endif

    @if(isset($settings['area8']))
        {!! BBRenderUnits($settings['area8']) !!}
    @endif
</div>
@if(isset($settings['area9']))
    {!! BBRenderUnits($settings['area9']) !!}
@endif
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}

