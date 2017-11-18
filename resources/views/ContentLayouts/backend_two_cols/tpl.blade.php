<div class="col-md-3 left-column"  style="background: black;">
    @if(isset($settings['placeholders']['left_bar']))
        {!! BBRenderUnits($settings['placeholders']['left_bar']) !!}
    @endif
</div>
<div class="col-md-9">
    @yield('content')
</div>
<style>
    body, html {
        height: 100%;
    }

    div#wrapper {
        flex-direction: column;
        display: flex;
        height: 100%;
    }

    .adm-top {
        overflow: auto;
        flex: 1 100%;
        display: flex;
    }
</style>