@php
    $menu_array = BBAdminMenu(false);
@endphp

<aside class="aside-left">

    <div class="page-sidebar">

        <div class="@if(isset($settings['user_cart_class'])) user-profile @endif">
            @if(isset($settings['user_image']))
                <div class="profile-img"><img src="{!! BBGetUserAvatar() !!}" alt="user"></div>
            @endif
            @if(isset($settings['user_name']))
                <div class="profile-text"><a href="#">{!! BBGetUserName() !!}</a>
                    @endif

                </div>
        </div>

        @if (is_array($menu_array))
            <ul id="side-nav" class="main-menu navbar-collapse">
                @foreach ($menu_array as $key => $item)
                    @php
                        $link = 'javascript:void(0)';
                        $icon = (isset($item['icon'])) ? $item['icon'] : 'fa fa-share-square-o';
                        if (isset($item['custom-link'])) {
                            $link = $item['custom-link'];
                        }
                    @endphp

                    <li class="has-sub">
                        <a href="javascript:void(0)"><i class="{{ $icon }}"></i>
                            <span class="title">{{ $item['title'] }}</span>
                        </a>
                        @if (isset($item['children']) and is_array($item['children']))
                            <ul class="nav collapse" id="id{{ $key }}">
                                @foreach ($item['children'] as $child)
                                    <li>
                                        <a href="{{ $child['custom-link'] }}"><span
                                                    class="title">{{ $child['title'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>


        @endif
    </div>

</aside>
<div class="clearfix"></div>


<style>
    @if(isset($settings['background_image']))
    .aside-left .user-profile {
        background: url(../../../public/images/438372.jpg) no-repeat;
        position: relative;
        background-size: cover;
    }
    @endif
</style>
{!! BBstyle($_this->path.DS.'css'.DS.'custom.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'script.js') !!}
