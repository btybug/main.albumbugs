{!! BBstyle($_this->path.DS.'css/style.css') !!}
{!! BBstyle('public/libs/tagsinput/bootstrap-tagsinput.css') !!}
@php
    $params = \Request::route()->parameters();
    $client=null;
    $url='javascript::void(0)';
    if(isset($params['param'])){
        $clientId=$params['param'];
        $url=url('/oauth/clients/',$clientId);
        $client=\Laravel\Passport\Client::find($clientId);
    }
@endphp

<div id="exTab1" class="container custom_tabs">
    <ul class="nav nav-pills">
        <li class="active">
            <a href="#general" data-toggle="tab" aria-expanded="true">General</a>
        </li>
        <li><a href="#panel" data-toggle="tab">Panel</a>
        </li>
    </ul>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="general">
            {!! Form::model($client,['url'=>$url]) !!}
            <div class="custom_general_content">
                <div class="form-group">
                    <div class="col-md-6">
                        <label>App ID</label>
                        {!! Form::text('id',null,['readonly','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-6">
                        <label>App Secret</label>
                        {!! Form::text('secret',null,['readonly','class'=>'form-control']) !!}
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Displae Name</label>
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-6">
                        <label>Namespace</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Redirect Url</label>
                        {!! Form::text('redirect',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-6">
                        <label>Contact Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Private Police URL</label>
                        <input type="url" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Terms of Service URl</label>
                        <input type="url" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>App Icon</label>
                        <div class="d-flex">
                            <input type="text" class="form-control">
                            <button class="btn btn-md btn-info">Upload</button>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <label>Category</label>
                        <select name="" id="" class="form-control">
                            <option value="">Business and Pages</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <p class="custom_info">Find out more information about app categories here</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="text-right col-md-12">
                    <button class="btn btn-success">Save</button>
                </div>
                <div class="clearfix"></div>

            </div>
            {!! Form::close() !!}
        </div>
        <div class="tab-pane " id="panel">
            <h3>Panel</h3>
        </div>
    </div>
</div>

{!! BBscript('public/libs/tagsinput/bootstrap-tagsinput.min.js') !!}


<script>
    window.onload = function () {
        $(".app_domain_custom").tagsinput('items');
    };
</script>
