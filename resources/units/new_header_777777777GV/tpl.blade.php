<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<header class="bty-header">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="{!! BBgetSiteLogo() !!}" alt="">
                    <span>{!! BBgetSiteName() !!}</span>
                </a>
            </div>
            @if(isset($settings['menu_area']))
                @php
                    $items = BBGetMenu($settings['menu_area'])
                @endphp
                @if(count($items))
                    <ul class="nav navbar-nav">
                        @foreach($items as $item)
                            <li><a href="{!! url($item->url) !!}"><i
                                            class="{!! $item->icon !!}"></i> {!! $item->title !!}</a></li>
                        @endforeach
                    </ul>
                @endif
            @endif
            @if(!Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="bty-btn-sign-up"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            @else


                <ul class="nav navbar-nav navbar-right header-user">
                    <li>
                        <a href="" class="user-link"><img src="{!! BBGetUserAvatar() !!}" alt=""></a>
                        <ul>

                            <li><a href="{!! url('logout') !!}"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log out</span></a>
                            </li>
                            @if(isset($settings['user_menu']))
                                @php
                                    $items = BBGetMenu($settings['user_menu'])
                                @endphp
                                @if(count($items))
                                    @foreach($items as $item)
                                        <li><a href="{!! url($item->url) !!}"><i class="fa fa-sign-out"
                                                                                 aria-hidden="true"></i><span>{!! $item->title !!}</span></a>
                                        </li>
                                    @endforeach
                                @endif
                            @endif

                        </ul>
                    </li>
                </ul>
            @endif
        </div>
    </nav>
</header>

<div class="bty-log-reg">
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
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'main.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'main.js') !!}
</html>