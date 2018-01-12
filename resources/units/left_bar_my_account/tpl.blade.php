<?php

use Btybug\FrontSite\Models\FrontendPage;

$front_pages = FrontendPage::where('content_type','template')->with('childs')->get();

function renderMenu($data){
    if(!count($data)){
        return '<li><a href="#">No menu items</a></li>';
    }
    $html = '';
    foreach ($data as $key => $settings){
        $children = $settings->childs;
        if(count($children)){
            $sub_menu = '';
            foreach ($children as $ch){
                $sub_menu .= '<li><a href="'.$ch->url.'">'.$ch->title.'</a></li>';
            }
            $html .= '<li><a href="'.$settings->url.'">'.$settings->title.'</a><ul>'.$sub_menu.'</ul></li>';
        }else{
            $html .= '<li><a href="'.$settings->url.'">'.$settings->title.'</a></li>';
        }
    }
    return $html;
}

?>
<div class="bty-vertical-menu-2">
    <ul>
        {!! renderMenu($front_pages) !!}
    </ul>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'styles.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'script.js') !!}