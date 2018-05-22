@if(!isset($ajax))
    <div class="row modal-data">
        <div class="col-md-3 modal-list-menu builder-modalleft">
            <ul class="filedcolumntype list-group listdatagroup" role="tablist">
                @foreach($units as $tpl)
                    <li class="menu-nav">
                        <div class="nav-bg"></div>
                        <div class="title">
                            <div class=icon>
                                <i class="fa fa-server" aria-hidden="true"></i>
                            </div>
                            <a href="javascript:void(0)" type="button" data-id="{!! $tpl->slug !!}"
                               data-action="units" data-key="{!! $data['key'] !!}" class="styles">
                                {{--<img src="{!! url('images/form-list.jpg') !!}">--}}
                                <span>{!! $tpl->title !!}</span></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-9 modal-list-content builder-modalright modal-data-items">
            <iframe class="magic-modal-iframe"  style="width: 100%; height: 100%;" src="javascrip:void(0)"></iframe>
        <script type="template" id="magic-modal-options">
            <option> Select Variation</option>
            @if(!isset($items))
                @foreach($tpl->variations()->all() as $item)
                <option value="{!! $item->id !!}"> {!! $item->title?$item->title:"no title" !!}</option>
                @endforeach
            @else
                @foreach($items as $item)
                <option value="{!! $item->id !!}"> {!! $item->title?$item->title:"no title" !!}</option>
                @endforeach
            @endif
        </script>
        </div>

    @if(!isset($ajax))
    </div>
@endif