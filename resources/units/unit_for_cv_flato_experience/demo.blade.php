<section id="experience-flato" class="{{(isset($settings['style'])&& $settings['style'] ) ? $settings['style'] : 'demo-column'}}">
    <div class="container">
        <div class="experience">
                <div class="heading">
                    <h2 class="title">Work Experience</h2>
                    <p>My previous associations</p>
                </div>
            <div class="content-experience">
                @if(isset($settings['exp_count']))
                    @for($i=1; $i<=$settings['exp_count']; $i++)
                    <div class="row details">
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <div class="workYear">@if(isset($settings['from'.$i])){{$settings['from'.$i]}}@else From @endif<br> @if(isset($settings['to'.$i])){{$settings['to'.$i]}}@else To @endif</div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
                            <div class="arrowpart"></div>
                            <div class="exCon">
                                <h4>@if(isset($settings['company_name'.$i])){{$settings['company_name'.$i]}}@else Company Name @endif</h4>
                                <h5>@if(isset($settings['position'.$i])){{$settings['position'.$i]}}@else Position @endif</h5>
                                <p>@if(isset($settings['desc'.$i])){{$settings['desc'.$i]}}@else Description @endif</p>
                            </div>
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>

</section>

{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! useDinamicStyle('containers') !!}
{!! useDinamicStyle('texts') !!}
{!! useDinamicStyle('images') !!}