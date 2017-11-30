
@php
    if(!isset($page)){
        $page = \Btybug\btybug\Services\RenderService::getFrontPageByURL();
    }
            $settings=json_decode($page->settings,true);
            if(isset($settings['file_path']) && View::exists($settings['file_path'])){
            $path=$settings['file_path'];
          }
@endphp
@include($path)
