@php
    $page = BBgetFrontPage('my-account');
@endphp
<div class="profile-user">
    <div class="profile-img">
        <img src="https://dnatesting.com/wp-content/uploads/2010/01/1-21-2009_IDG-Blog-1000x562.jpg"
             alt="">
    </div>
    <div class="profile-name">
        <h2 class="{{isset($settings['top_style']) ? $settings['top_style'] : ''}}">
            {{isset($settings['top_column']) ? Auth::user()[$settings['top_column']] : ''}}
        </h2>
        <p class="{{isset($settings['sub_style']) ? $settings['sub_style'] : ''}}">
            {{isset($settings['sub_column']) ? Auth::user()[$settings['sub_column']] : ''}}
        </p>
    </div>
    <div class="profile-icon">
        <ul>
            @if(isset($settings['icons']))
                @foreach($settings['icons'] as $key => $val)
                    <li class="{{$settings['icons'][$key]['style']}}"><a href="{{$settings['icons'][$key]['url']}}"><i class="fa {{$settings['icons'][$key]['icon']}}"></i></a></li>
                @endforeach
            @endif
        </ul>
    </div>
    <ul class="profile-menu {{isset($settings['pym_shipping_style']) ? $settings['pym_shipping_style'] : ''}}">
        {!! isset($settings['pym_shipping']) ? BBRenderUnits($settings['pym_shipping']) : ''!!}
    </ul>
    <ul class="social-btn">
        @if(isset($settings['socials']))
            @foreach($settings['socials'] as $key => $val)
                <li class="{{$settings['socials'][$key]['style']}}"><a href="{{$settings['socials'][$key]['url']}}"><i class="fa {{$settings['socials'][$key]['icon']}}"></i></a></li>
            @endforeach
        @endif
    </ul>


</div>
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js') !!}