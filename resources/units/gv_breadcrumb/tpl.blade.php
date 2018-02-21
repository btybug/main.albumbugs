<?php
$parentsArray = \Btybug\FrontSite\Services\FrontendPageService::getFirstParent($page);
?>

<div class="col-md-12">
    <div class="{{isset($settings["style"]) ? $settings["style"] : 'bty-breadcrumb-3'}}">
        <ul>
            @if($parentsArray)
                @foreach($parentsArray as $parent)
                    <li><a href="{{$parent->url}}">{{$parent->title}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css'.DS.'styles.css') !!}