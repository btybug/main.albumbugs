@if(isset($settings['main_function']) && View::exists($_this->slug.'::view.'.$settings['main_function']))
@include($_this->slug.'::view.'.$settings['main_function'])
@endif

{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js',$_this) !!}