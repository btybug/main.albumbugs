@if($units)
    @foreach($units as $ui)
        <div class="bty-unit-2">
            <div class="custom_margin_5">
                <div>
                    <span>{!! BBgetDateFormat($ui->created_at,"d") !!}</span>
                    <span>{!! BBgetDateFormat($ui->created_at,"M") !!}</span>
                    <span>{!! BBgetDateFormat($ui->created_at,"Y") !!}</span>
                </div>
                <span><img src="http://blog.mcafeeinstitute.com/wp-content/uploads/2015/10/rain_wallpaper_good_2023_high_definition.jpg" alt=""></span>
                <div class="{{ isset($ui->tags)?'custom_div_for_tags':'custom_div_for_tags_when_not' }}">
                    <ul>
                        <li><a href=" {{route('uploads_units_variations_new',$ui->slug)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></li>
                        <li><a data-href="{!! url('/admin/uploads/gears/delete') !!}" data-key="{!! $ui->slug !!}" data-type="Unit"><i class="fa fa-trash"></i></a></li>
                    </ul>
                    <div>
                        <span><i class="fa fa-user" aria-hidden="true"></i> {!! $ui->author !!}</span>
                        <h5><a href="#">{!! str_limit($ui->title,15) !!}</a></h5>

                        {{--<p>{!! $ui->descripiton !!}</p>--}}
                        @if(isset($ui->tags) && count($ui->tags) > 0)
                            <ul>
                                @foreach($ui->tags as $tag)
                                    <li><a href="#">{!! $tag !!}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="loadding"><em class="loadImg"></em></div>
    {!! $units->links() !!}
@else
    <div class="col-xs-12 addon-item">
        NO Results
    </div>
@endif

