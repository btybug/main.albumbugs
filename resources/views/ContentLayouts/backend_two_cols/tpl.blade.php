<div class="col-md-3"  style="background: black;">
    @if(isset($settings['placeholders']['left_bar']))
        {!! BBRenderUnits($settings['placeholders']['left_bar']) !!}
    @endif
</div>
<div class="col-md-9">
    @yield('content')
</div>
<style>
    .adm-top {
        overflow: auto;
        height: calc(100vh - 55px);
    }

    .adm-top>div {
        height: calc(100vh - 55px);
    }
</style>