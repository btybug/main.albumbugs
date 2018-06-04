@option('general','f',$data)
<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Functions</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('main_function',[
                null=>'Main Function',
                'position'=>'Position',
                'destination'=>'Destination'],null,['class'=>'form-control double-select','data-value'=>'main']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>{!!Form::number('lng', 'value');!!}
<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                    <label for="">Longitute</label>
            </div>
            <div class="col-md-8">
                {!!Form::number('lng', 'value');!!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Latitute</label>
            </div>
            <div class="col-md-8">
                {!!Form::number('lat', 'value');!!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption
@option('general','s',$data)
<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Style</label>
            </div>
            <div class="col-md-8">
                {!!Form::select('style', array(
                   '0' => 'Roadmap',
                   '1' => 'Satellite',
                   '2' => 'Hybrid',
                   '3' => 'Terrain',
                ));!!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption
{!! BBstyle(public_path('css'.DS.'select2'.DS.'select2.min.css')) !!}
{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript(public_path('js'.DS.'select2'.DS.'select2.full.min.js')) !!}
{!! BBscript($_this->path.DS.'js'.DS.'settings.js') !!}






