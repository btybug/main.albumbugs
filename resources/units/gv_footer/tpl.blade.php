<footer class="bty-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-top-content">
                    <div class="logo col-md-3">
                        {!!isset($settings['area1'])? BBRenderUnits($settings['area1']):"area 1" !!}
                    </div>
                    <div class="menu col-md-3">
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

<style>
    footer.bty-footer {
        /*position: fixed;*/
        left: 0;
        right: 0;
        margin: 0 auto;
        bottom: 0;
        font-weight: 400;
        color: #757070;
        font-size: 15px;
        line-height: 1.6;
        letter-spacing: 0px;
    }

    footer.bty-footer .footer-top {
        background-color: #222221;
        padding: 90px 0;
    }

    footer.bty-footer .footer-bottom {
        background-color: #2f2f2d;
        padding: 16px 0;
    }
    footer.bty-footer .footer-top .logo a{
        vertical-align: text-bottom;
    }
    footer.bty-footer .footer-top .logo img {
        width: 37px;
        height: 37px;
        object-fit: cover;
        border: 1px solid #cccccc52;
        border-radius: 50%;
        vertical-align: middle;
    }

    footer.bty-footer .footer-top .logo h5 {
        display: inline-block;
        padding-left: 12px;
    }

    footer.bty-footer .footer-top h5 {
        font-weight: 600;
        color: #ffffff;
        font-size: 22px;
        line-height: 1.2;
        letter-spacing: 0;
        margin-bottom: 20px;
    }

    footer.bty-footer .footer-top .menu ul {
        list-style: none;
        padding: 0;
    }

    footer.bty-footer .footer-top .menu a {
        color: #757070;
        text-decoration: none;
        transition: 0.5s ease;
    }

    footer.bty-footer .footer-top .menu a:hover {
        color: white;
    }

    footer.bty-footer .footer-top .contact p {
        margin: 0;
    }

    footer.bty-footer .footer-top .contact i {
        padding-right: 10px;
        color: #358eecbd;
    }
    footer.bty-footer .footer-top .subscribe form{
        display: inline-flex;
        margin-top: 20px;
    }
    footer.bty-footer .footer-top .subscribe form input[type=submit]{
        background-color: #3073b9;
        color: white;
        padding: 5px 7px;
        border: none;
        font-size: 16px;
    }
    footer.bty-footer .footer-top .subscribe h5{
        text-align: center;
    }
    footer.bty-footer .footer-top .subscribe form input[type=email]{
        padding: 3px 0;
    }


    footer.bty-footer .footer-top .subscribe form input[type=email]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: #ccc;
        padding-left: 5px;
    }
    footer.bty-footer .footer-top .subscribe form input[type=email]::-moz-placeholder { /* Firefox 19+ */
        color: #ccc;
        padding-left: 5px;
    }
    footer.bty-footer .footer-top .subscribe form input[type=email]:-ms-input-placeholder { /* IE 10+ */
        color: #ccc;
        padding-left: 5px;
    }
    footer.bty-footer .footer-top .subscribe form input[type=email]:-moz-placeholder { /* Firefox 18- */
        color: #ccc;
        padding-left: 5px;
    }
    footer.bty-footer .footer-top .subscribe form input[type=email]:focus::-webkit-input-placeholder {color: transparent}
    footer.bty-footer .footer-top .subscribe form input[type=email]:focus::-moz-placeholder          {color: transparent}
    footer.bty-footer .footer-top .subscribe form input[type=email]:focus:-moz-placeholder           {color: transparent}
    footer.bty-footer .footer-top .subscribe form input[type=email]:focus:-ms-input-placeholder      {color: transparent}
    footer.bty-footer .footer-bottom .social ul{
        list-style: none;
        margin: 0;
        text-align: right;
    }
    footer.bty-footer .footer-bottom .social ul li{
        display: inline-block;
        padding-left: 15px;
    }
    footer.bty-footer .footer-bottom .social ul li i{
        color: #358eecbd;
        transition: 0.5s ease;
    }
    footer.bty-footer .footer-bottom .social ul li a:hover i{
        color: #ffffff;
    }
    footer.bty-footer .footer-bottom .reserverd p{
        margin: 0;
        font-size: 14px;
    }
</style>