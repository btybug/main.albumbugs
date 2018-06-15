<div class="col-md-3 left">
    <div class="profile-user {{(isset($settings['style'])&& $settings['style'] ) ? $settings['style'] : 'demo-column'}}">
        <div class="profile-img">
            <img src="https://dnatesting.com/wp-content/uploads/2010/01/1-21-2009_IDG-Blog-1000x562.jpg"
                 alt="" class="{{isset($settings['image_style']) ? $settings['image_style'] : ''}}">
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
        <ul class="profile-menu">
            <li class="profile-item">
                <a href="#" class="sublink">Menu1<i class="fa fa-chevron-down"></i></a>
                <ul class="cute">
                    <li class="subitem"><a href="#">sub menu1</a></li>
                    <li class="subitem"><a href="#">sub menu2</a></li>
                    <li class="subitem"><a href="#">sub menu3</a></li>
                </ul>
            </li>
            <li class="profile-item">
                <a href="#" class="sublink">Menu2<i class="fa fa-chevron-down"></i></a>
                <ul class="cute">
                    <li class="subitem"><a href="#">sub menu2.1</a></li>
                    <li class="subitem"><a href="#">sub menu2.2</a></li>
                    <li class="subitem"><a href="#">sub menu2.3</a></li>
                </ul>
            </li>
            <li class="profile-item"><a href="#">Menu3</a></li>
            <li class="profile-item"><a href="#">Menu4</a></li>
            <li class="profile-item"><a href="#">Menu5</a></li>
        </ul>
        {{--<ul class="profile-menu {{isset($settings['menu_area_style']) ? $settings['menu_area_style'] : ''}}">--}}
            {{--@php--}}
                {{--$items = isset($settings['menu_area']) ? BBGetMenu($settings['menu_area']) : [];--}}
            {{--@endphp--}}
            {{--@if(count($items))--}}
                {{--@foreach($items as $item)--}}
                    {{--@if(isset($item['children']))--}}
                        {{--<li class="item">--}}
                            {{--<a class="sublink" data-toggle="dropdown" aria-expanded="true">{!! $item['title'] !!}<i class="fa fa-caret-down"></i></a>--}}
                            {{--<ul class="cute">--}}
                                {{--@foreach($item['children'] as $child)--}}
                                    {{--<li><a href="{!! url($child['url']) !!}"><i class="fa {!! $child['icon'] !!}"></i> {!! $child['title'] !!}</a></li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@else--}}
                        {{--<li class="item"><a href="{!! url($item['url']) !!}"><i class="fa {!! $item['icon'] !!}"></i> {!! $item['title'] !!}</a></li>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--</ul>--}}
        <ul class="social-btn">
            @if(isset($settings['socials']))
                @foreach($settings['socials'] as $key => $val)
                    <li class="{{$settings['socials'][$key]['style']}}"><a href="{{$settings['socials'][$key]['url']}}"><i class="fa {{$settings['socials'][$key]['icon']}}"></i></a></li>
                @endforeach
            @endif
        </ul>

    </div>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js',$_this) !!}
{!! useDinamicStyle('images') !!}
{!! useDinamicStyle('texts') !!}
{!! useDinamicStyle('menus') !!}
{!! useDinamicStyle('icons') !!}
{!! useDinamicStyle('containers') !!}