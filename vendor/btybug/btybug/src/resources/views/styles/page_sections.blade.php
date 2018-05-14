@if(!isset($ajax))
    <div class="row modal-data">
        <div class="col-md-3 builder-modalleft modal-list-menu">
            <ul class="filedcolumntype " role="tablist">
                @foreach($layouts as $layout)
                    <li class="menu-nav">
                        <div class="nav-bg"></div>
                        <div class="title">
                            <div class="icon">
                                <i class="fa fa-server" aria-hidden="true"></i>
                            </div>
                            <a class="styles" data-id="{!! $layout->slug !!}" data-action="page_sections"
                               href="javascript:void(0)">
                                {{--<img src="{!! url('images/form-list2.jpg') !!}">--}}
                                <span>{!! $layout->title !!}</span></a>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-9 modal-data-items builder-modalright modal-list-content">
            <h5>Select Variation</h5>
            @if(!isset($items))
                @foreach($layouts[0]->variations()->all() as $item)
                    <ul class="formlisting">
                        {{--<li>--}}
                            {{--<a class="btn item" data-value="{!! $item->id !!}" href="javascript:void(0)">--}}
                                {{--<input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/> <img--}}
                                        {{--src="{!! url('images/form-list2.jpg') !!}">--}}
                            {{--</a>--}}
                            {{--<span>{!! $item->title !!}<a href="#" target="_blank"><i class="fa fa-pencil pull-right"--}}
                                                                                     {{--aria-hidden="true"></i></a></span>--}}

                        {{--</li>--}}
                        <li class="col-md-3 col-sm-3 col-xs-12">
                            <figure>
                                <a class="text-center item item-unit zzzzz" data-value="{!! $item->id !!}" href="javascript:void(0)">
                                    <input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/>
                                    <img src="{!! asset('public/images/default.jpg') !!}">

                                </a>

                                <p>
                                    <a class="btn text-center item item-unit zzzzz custom_color_white" data-value="{!! $item->id !!}" href="javascript:void(0)">
                                        <input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/>
                                        {!! $item->title?$item->title:"no title" !!}

                                    </a>
                                </p>
                                <figcaption>
                                    <div>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-pencil pull-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <p>
                                            <a class="btn text-center item item-unit zzzzz custom_color_white" data-value="{!! $item->id !!}" href="javascript:void(0)">
                                                <input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/>
                                                {!! $item->title?$item->title:"no title" !!}

                                            </a>
                                        </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                    @else
                        <ul class="formlisting">
                            @foreach($items as $item)
                                {{--<li>--}}
                                    {{--<a class="btn item" data-value="{!! $item->id !!}" href="javascript:void(0)">--}}
                                        {{--<input type="hidden" data-action="page_sections"--}}
                                               {{--data-value="{!! $item->id !!}"/>--}}
                                        {{--<img src="{!! url('images/form-list2.jpg') !!}"></a>--}}
                                    {{--<span>{!! $item->title !!}<a href="#" target="_blank"><i--}}
                                                    {{--class="fa fa-pencil pull-right" aria-hidden="true"></i></a></span>--}}

                                {{--</li>--}}
                                <li class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <a class="text-center item item-unit zzzzz" data-value="{!! $item->id !!}" href="javascript:void(0)">
                                            <input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/>
                                            <img src="{!! asset('public/images/default.jpg') !!}">

                                        </a>

                                        <p>
                                            <a class="btn text-center item item-unit zzzzz custom_color_white" data-value="{!! $item->id !!}" href="javascript:void(0)">
                                                <input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/>
                                                {!! $item->title?$item->title:"no title" !!}

                                            </a>
                                        </p>
                                        <figcaption>
                                            <div>
                                                <a href="#" target="_blank">
                                                    <i class="fa fa-pencil pull-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <p>
                                                    <a class="btn text-center item item-unit zzzzz custom_color_white" data-value="{!! $item->id !!}" href="javascript:void(0)">
                                                        <input type="hidden" data-action="page_sections" data-value="{!! $item->id !!}"/>
                                                        {!! $item->title?$item->title:"no title" !!}

                                                    </a>
                                                </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </li>
                            @endforeach
                        </ul>
                    @endif
        </div>
        @if(!isset($ajax))
    </div>
@endif