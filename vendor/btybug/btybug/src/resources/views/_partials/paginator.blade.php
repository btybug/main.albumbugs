<?php
$page=$paginator->getPage();
$last       = ceil( $paginator->getTotal() / $paginator->getLimit() );
$start      = ( ( $page - $paginator->getLinksCount() ) > 0 ) ? $page - $links : 1;
$end        = ( ( $page + $paginator->getLinksCount() ) < $last ) ? $page + $paginator->getLinksCount() : $last;
?>
<div class="{!!$paginator->getListClass()!!}">
    <ul>
            <li><a class="first" @if(1==1) href="?page={!!'#'!!}"
                   @else href="#" disabled="true" @endif>Previous</a></li>
            @for ( $i = $start ; $i < $end; $i++ )
                <li @if($page==$i)class="active"@endif><a href="?page={!! $i !!}">{!! $i !!}</a></li>
            @endfor
            <li><a @if(1==1)href="?page={!! "#" !!} "@else disabled="true" @endif>Next</a></li>
    </ul>
</div>