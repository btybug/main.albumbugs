@if(isset($settings['main_function']) && View::exists($_this->slug.'::view.'.$settings['main_function']))
    @include($_this->slug.'::view.'.$settings['main_function'])
@endif
@if(isset($settings['my_image']))
    <img src="{!! url($settings['my_image']) !!}">
@endif
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js',$_this) !!}