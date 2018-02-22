<div class="form-group lets_each">
    <div class="col-md-7">
        {!! BBbutton2('unit',$repl,'frontend','Select Menu',['class'=>'form-control input-md ic','model'=>null,'data-name-prefix' => 'menu_area']) !!}
    </div>
    <div class="col-md-4">
        <label for="" class="col-sm-3">Grid</label>
        <div class="col-md-9">
            <select name="menu_area[{{ $repl }}][style]" id="" class="form-control style">
                <option>select grid</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>
    <div class="col-md-1">
        <button class="btn btn-danger pull-right remove_this"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="clearfix"></div>