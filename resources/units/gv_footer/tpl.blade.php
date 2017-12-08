<footer class="bty-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-top-content">
                    <div class="logo col-md-3">
                        {!!isset($settings['area1'])? BBRenderUnits($settings['area1']):"area 1" !!}
                    </div>
                    <div class="menu-footer col-md-3">
                        @if(isset($settings['menu_area']))
                            @php
                                $items = BBGetMenu($settings['menu_area'])
                            @endphp
                            @if(count($items))
                                <h5>Menu</h5>
                                <ul>
                                    @foreach($items as $item)
                                        <li><a href="{!! url($item->url) !!}"><i
                                                        class="{!! $item->icon !!}"></i> {!! $item->title !!}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            area 2
                        @endif
                    </div>
                    <div class="contact col-md-3">
                        <ul class="nav navbar-nav navbar-right">
                            @if(isset($settings['area3']))
                                {!! BBRenderUnits($settings['area3']) !!}
                            @else
                                area 3
                            @endif
                        </ul>
                    </div>
                    <div class="subscribe col-md-3">
                        {!!isset($settings['area4'])? BBRenderUnits($settings['area4']):"area 4" !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="footer-bottom-content">
                    <div class="col-md-6 reserverd">
                        <p>© 2017 All rights reserved.</p>
                    </div>
                    <div class="col-md-6 social">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{!! BBstyle($_this->path.DS.'css'.DS.'styles.css') !!}