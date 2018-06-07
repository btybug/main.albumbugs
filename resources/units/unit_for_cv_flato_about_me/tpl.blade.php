<section id="about-flato">
    <div class="container">
        <div class="about">
            <div class="heading">
                <h2 class="title">ABOUT ME</h2>
                <p>A small introduction about my self</p>
            </div>
            <div class="row aboutme">

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

                    <h3>@if(isset($settings['name'])){{$settings['name']}}@else{{"Your Name"}}@endif</h3>
                    <h4 class="subHeading">@if(isset($settings['spec'])){{$settings['spec']}}@else{{"Your Specialty"}}@endif from @if(isset($settings['city'])){{$settings['city']}}@else{{"Your City"}}@endif</h4>
                    <p>@if(isset($settings['about_me'])){{$settings['about_me']}}@else{{"About You"}}@endif</p>
                    <a href="javascript:void(0);" class="bntDownload">Download Resume</a>
                </div>


                <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 proPic">

                    <img style="@if(isset($settings['image_width'])){{"width:".$settings['image_width'].";height:".$settings['image_width']}}@else{{"100%"}}@endif" src="@if(isset($settings['image_url'])){{$settings['image_url']}}@else{{"http://themesquared.com/flato/wp-content/uploads/2014/08/me.jpg"}}@endif" alt=""
                         class="img-circle">

                </div>
            </div>
        </div>
    </div>
</section>

{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
