<section id="header">
    <nav class="navbar navbar-bg">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route("go_to_home")}}"><img src="{!! BBgetSiteLogo() !!}" alt="logo"> <span>{!! BBgetSiteName() !!}</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">


                <ul class="nav navbar-nav navbar-right login-part">
                    @if(!Auth::check())
                        @if(isset($settings['widget']))
                            <li>
                                {!! BBRenderUnits($settings['widget']) !!}
                            </li>
                        @endif
                            <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                            <li><a href="#">register</a></li>
                    @else
                        @if(isset($settings['widget']))
                            <li>
                                {!! BBRenderUnits($settings['widget']) !!}
                            </li>
                        @endif


                    <li class="prof-pic"><a href=""><img src="{!! BBGetUserAvatar() !!}" alt=""></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">{{Auth::user()->username}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            @if(isset($settings['user_menu']))
                                @php
                                    $items = BBGetMenu($settings['user_menu'])
                                @endphp
                                @if(count($items))
                                    @foreach($items as $item)
                                        <li><a href="{!! url($item->url) !!}"><i class="fa {!! $item->icon !!}"
                                                                                                                                   aria-hidden="true"></i><span>{!! $item->title !!}</span></a>
                                        </li>
                                    @endforeach
                                @endif
                            @endif
                            <li><a href="/my-account"><i class="fa fa-users" aria-hidden="true"></i><span>My Account</span></a></li>
                            <li><a href="{!! url('logout') !!}"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log out</span></a></li>

                        </ul>
                    </li>
                    @endif
                </ul>


                @if(isset($settings['menu_area']))
                    @php
                        $items = BBGetMenu($settings['menu_area'])
                    @endphp
                    @if(count($items))
                        <ul class="nav navbar-nav  navbar-right header-menu">
                            @foreach($items as $item)
                                <li><a href="{!! url($item->url) !!}"><i
                                                class="fa {!! $item->icon !!}"></i> {!! $item->title !!}</a></li>
                            @endforeach
                        </ul>
                    @endif
                @endif


            </div>
        </div>
    </nav>
</section>



<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url'=>url('login')]) !!}
                <fieldset>
                    <h2>Please Login</h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="text" name="usernameOremail" id="email" class="form-control input-lg" placeholder="Username or Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" value="">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                        </label>
                        <a href="http://albumbugs.dev/forgot" class="btn btn-link pull-right">Forgot Password?</a>
                    </div>
                    <hr class="colorgraph">
                </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Login">
            </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
</div>

<script>

    $(document).ready(function(){

        var showHeaderAt = 150;

        var win = $(window),
            body = $('body');

        // Show the fixed header only on larger screen devices

        if(win.width() > 600){

            // When we scroll more than 150px down, we set the
            // "fixed" class on the body element.

            win.on('scroll', function(e){

                if(win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                }
                else {
                    body.removeClass('fixed');
                }
            });

        }
        var headburg = $('#burger-mob-head');
        var headnav = $('.header-login-signup .header-limiter nav');
        headburg.on( "click", function() {
            headnav.toggle();
            $(this).children('i').toggleClass('fa-bars fa-times');
        });

    });

</script>
{{--<div class="bty-log-reg">
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                {!! Form::open(['url'=>url('login')]) !!}
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="usernameOremail" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="password" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                {!! Form::close() !!}
                {!! Form::open() !!}
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1"><a href="">Already Member?</a></label>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>--}}
{!! BBstyle($_this->path.DS.'css'.DS.'header.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'main.js') !!}
