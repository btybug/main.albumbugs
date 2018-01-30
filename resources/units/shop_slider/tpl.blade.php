@if(isset($settings["images"]) && is_array($settings["images"]))
    <div id="home-slick" style="height: 40%;width: 60%">
        @foreach($settings["images"] as $key => $setting)
            @if($setting['path'] != null)
                <div class="banner banner-1">
                    <img src="{{$setting['path']}}" alt="">
                    <div class="banner-caption text-center">
                        <h1>{{$setting['title']}}</h1>
                        <h3 class="white-color font-weak">{{$setting['description']}}</h3>
                        <button class="primary-btn">Shop Now</button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endif

{!! BBstyle($_this->path.DS.'css'.DS.'slick.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'slick-theme.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'styles.css') !!}

{!! BBscript($_this->path.DS.'js'.DS.'slick.min.js') !!}
{!! BBscript($_this->path.DS.'js'.DS.'script.js') !!}