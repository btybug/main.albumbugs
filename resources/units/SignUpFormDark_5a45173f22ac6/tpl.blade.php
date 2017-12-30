{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBscript($_this->path.DS.'js/main.js') !!}

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">{!! get_settings($settings, "signup_tab_title", "Sign Up") !!}</a></li>
        <li class="tab"><a href="#login">{!! get_settings($settings, "login_tab_title", "Log In") !!}</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>{!! get_settings($settings, "signup_title", "Sign Up for Free") !!}</h1>

            <form action="/" method="post">

                <div class="bb-form-area connectedSortable"></div>

                <button type="submit" class="button button-block">{!! get_settings($settings, "signup_button_title", "Get Started") !!}</button>

            </form>

        </div>

        <div id="login">
            <h1>{!! get_settings($settings, "login_title", "Welcome Back!") !!}</h1>

            <form action="/" method="post">

                <div class="bb-form-area connectedSortable"></div>

                <button class="button button-block">{!! get_settings($settings, "login_button_title", "Log In") !!}</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->