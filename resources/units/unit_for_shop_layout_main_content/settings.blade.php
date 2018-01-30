<div class="form-group my_rows1">
    <label for="newcontainer" class="col-sm-4 labelTitle">Left bar menu</label>
    <div class="col-sm-8">
        {!! BBbutton2('menus','left_bar_menu','frontend','Select Menu',['class'=>'form-control input-md','model'=>$settings]) !!}
    </div>
</div>

<div class="form-group my_rows1">
    <label for="newcontainer" class="col-sm-4 labelTitle">Nav bar menu</label>
    <div class="col-sm-8">
        {!! BBbutton2('menus','nav_bar_menu','frontend','Select Menu',['class'=>'form-control input-md','model'=>$settings]) !!}
    </div>
</div>

<button type="button" class="btn btn-info" id="addinput">Add</button>
<div class="add_custome_page">
    @if(isset($settings["images"]) && is_array($settings["images"]))
        @foreach($settings["images"] as $key => $setting)
            <div style="border: 1px solid silver" class="form-group custom_div_key" data-key="{{$key}}">
                <input type="text" name="images[{{$key}}][title]" placeholder="Title" class="form-control" value="{{$setting['title']}}">
                <input type="text" name="images[{{$key}}][description]" placeholder="Description" class="form-control" value="{{$setting['description']}}">
                <input type="text" name="images[{{$key}}][path]" placeholder="Path" class="form-control" value="{{$setting['path']}}">
                <input type="button" value="Delete" class="btn btn-danger del" >
            </div>
        @endforeach
    @endif
</div>


{!! BBscript($_this->path.DS.'js'.DS.'settings.js') !!}









