<div id="top-header">
    <div class="container">
        <div class="pull-left">
            @if(isset($settings["left_text"]))
                <span>{{$settings["left_text"]}}</span>
            @endif
        </div>
        <div class="pull-right">

            @if(isset($settings['top_menu']))
                <ul class="header-top-links">
                    @php
                        $items = BBGetMenu($settings['top_menu'])
                    @endphp
                    @if(count($items))
                        @foreach($items as $item)
                            <li><a href="{!! url($item->url) !!}"><i class="{!! $item->icon !!}"></i> {!! $item->title !!}</a></li>
                        @endforeach
                    @endif
                </ul>
            @endif

            {{--<ul class="header-top-links">
                <li><a href="#">Store</a></li>
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">FAQ</a></li>
                <li class="dropdown default-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
                    <ul class="custom-menu">
                        <li><a href="#">English (ENG)</a></li>
                        <li><a href="#">Russian (Ru)</a></li>
                        <li><a href="#">French (FR)</a></li>
                        <li><a href="#">Spanish (Es)</a></li>
                    </ul>
                </li>
                <li class="dropdown default-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
                    <ul class="custom-menu">
                        <li><a href="#">USD ($)</a></li>
                        <li><a href="#">EUR (€)</a></li>
                    </ul>
                </li>
            </ul>--}}
        </div>
    </div>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}