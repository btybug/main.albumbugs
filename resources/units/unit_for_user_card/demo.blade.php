@if(isset($settings['main_function']) && View::exists($_this->slug.'::view.'.$settings['main_function']))
@include($_this->slug.'::view.'.$settings['main_function'])
@endif