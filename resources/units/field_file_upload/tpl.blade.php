{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBstyle($_this->path.DS.'css/fileinput.css') !!}
<div class="form-group">
    <div class="{!! issetReturn($settings,'radio_inp',null) !!}">
        <h4>
            @if(has_setting($settings, 'icon'))
                <i class="fa {!! issetReturn($settings,'icon',null) !!}"></i>
            @endif
            {!! issetReturn($settings,'label',null) !!}
            @if(has_setting($settings, 'tooltip_icon'))
                <span title="{!! issetReturn($settings,'help',null) !!}">
                <i class="fa {!! issetReturn($settings,'tooltip_icon',null) !!}"></i>
            </span>
            @endif
        </h4>
    </div>
</div>




<textarea id="upload_setting" class="hidden">{{isset($settings["upload_setting"]) ? json_encode($settings["upload_setting"],true) : ''}}</textarea>
@if(isset($settings['manual_item']))
    <div class="form-group">
        <input id="input-id" type="file" class="file" multiple>
    </div>
@endif
{!! BBscript($_this->path.DS.'js/fileinput.js') !!}
<script>

    window.frameElement.contentWindow.targetFunction(1);

    function targetFunction(is_called){
        if(is_called) {
            var hidden_data = $('#upload_setting').val();
            if(hidden_data){
                hidden_data = JSON.parse(hidden_data);
            }
            var data = {};
            data.manual_item = {{isset($settings["manual_item"]) ? 1 : 0}};
            data.upload_setting = hidden_data;
            getStars(data);
        }
    }
    function getStars(data){
        console.log(data.upload_setting);
        var obj = $("#input-id");
        if(typeof window.onload === 'function'){
            if (data.manual_item) {
                data.upload_setting.fileActionSettings.showRemove = data.upload_setting.fileActionSettings.showRemove && data.upload_setting.fileActionSettings.showRemove == 'true' ? true : false;
                data.upload_setting.fileActionSettings.removeClass = data.upload_setting.fileActionSettings.removeClass ? data.upload_setting.fileActionSettings.removeClass : 'btn btn-kv btn-default btn-outline-secondary';
                data.upload_setting.fileActionSettings.removeIcon = data.upload_setting.fileActionSettings.removeIcon ? '<i class="fa '+data.upload_setting.fileActionSettings.removeIcon+'"></i>' : '<i class="glyphicon glyphicon-trash"></i>';
                data.upload_setting.fileActionSettings.removeTitle = data.upload_setting.fileActionSettings.removeTitle ? data.upload_setting.fileActionSettings.removeTitle : 'Remove file';
                data.upload_setting.fileActionSettings.showUpload = data.upload_setting.fileActionSettings.showUpload && data.upload_setting.fileActionSettings.showUpload == 'true' ? true : false;
                data.upload_setting.fileActionSettings.uploadClass = data.upload_setting.fileActionSettings.uploadClass ? data.upload_setting.fileActionSettings.uploadClass : 'btn btn-kv btn-default btn-outline-secondary';
                data.upload_setting.fileActionSettings.uploadIcon = data.upload_setting.fileActionSettings.uploadIcon ? '<i class="fa '+data.upload_setting.fileActionSettings.uploadIcon+'"></i>' : '<i class="glyphicon glyphicon-upload"></i>';
                data.upload_setting.fileActionSettings.uploadTitle = data.upload_setting.fileActionSettings.uploadTitle ? data.upload_setting.fileActionSettings.uploadTitle : 'Upload file';
                data.upload_setting.fileActionSettings.showDownload = data.upload_setting.fileActionSettings.showDownload && data.upload_setting.fileActionSettings.showDownload == 'true' ? true : false;
                data.upload_setting.showBrowse = data.upload_setting.showBrowse && data.upload_setting.showBrowse == 'true' ? true : false;
                data.upload_setting.showCancel = data.upload_setting.showCancel && data.upload_setting.showCancel == 'true' ? true : false;
                data.upload_setting.showCaption = data.upload_setting.showCaption && data.upload_setting.showCaption == 'true' ? true : false;
                data.upload_setting.showPreview = data.upload_setting.showPreview && data.upload_setting.showPreview == 'true' ? true : false;
                data.upload_setting.showRemove = data.upload_setting.showRemove && data.upload_setting.showRemove == 'true' ? true : false;
                data.upload_setting.showUpload = data.upload_setting.showUpload && data.upload_setting.showUpload == 'true' ? true : false;

                obj.fileinput(data.upload_setting);
            }
        }else{
            window.onload = function(){
                if(obj.length) {
                    if(!data.upload_setting){
                        return obj.fileinput({'showUpload':false, 'previewFileType':'any'});
                    }
                    data.upload_setting.fileActionSettings.showRemove = data.upload_setting.fileActionSettings.showRemove && data.upload_setting.fileActionSettings.showRemove == 'true' ? true : false;
                    data.upload_setting.fileActionSettings.removeClass = data.upload_setting.fileActionSettings.removeClass ? data.upload_setting.fileActionSettings.removeClass : 'btn btn-kv btn-default btn-outline-secondary';
                    data.upload_setting.fileActionSettings.removeIcon = data.upload_setting.fileActionSettings.removeIcon ? '<i class="fa '+data.upload_setting.fileActionSettings.removeIcon+'"></i>' : '<i class="glyphicon glyphicon-trash"></i>';
                    data.upload_setting.fileActionSettings.removeTitle = data.upload_setting.fileActionSettings.removeTitle ? data.upload_setting.fileActionSettings.removeTitle : 'Remove file';
                    data.upload_setting.fileActionSettings.showUpload = data.upload_setting.fileActionSettings.showUpload && data.upload_setting.fileActionSettings.showUpload == 'true' ? true : false;
                    data.upload_setting.fileActionSettings.uploadClass = data.upload_setting.fileActionSettings.uploadClass ? data.upload_setting.fileActionSettings.uploadClass : 'btn btn-kv btn-default btn-outline-secondary';
                    data.upload_setting.fileActionSettings.uploadIcon = data.upload_setting.fileActionSettings.uploadIcon ? '<i class="fa '+data.upload_setting.fileActionSettings.uploadIcon+'"></i>' : '<i class="glyphicon glyphicon-upload"></i>';
                    data.upload_setting.fileActionSettings.uploadTitle = data.upload_setting.fileActionSettings.uploadTitle ? data.upload_setting.fileActionSettings.uploadTitle : 'Upload file';
                    data.upload_setting.fileActionSettings.showDownload = data.upload_setting.fileActionSettings.showDownload && data.upload_setting.fileActionSettings.showDownload == 'true' ? true : false;
                    data.upload_setting.showBrowse = data.upload_setting.showBrowse && data.upload_setting.showBrowse == 'true' ? true : false;
                    data.upload_setting.showCancel = data.upload_setting.showCancel && data.upload_setting.showCancel == 'true' ? true : false;
                    data.upload_setting.showCaption = data.upload_setting.showCaption && data.upload_setting.showCaption == 'true' ? true : false;
                    data.upload_setting.showPreview = data.upload_setting.showPreview && data.upload_setting.showPreview == 'true' ? true : false;
                    data.upload_setting.showRemove = data.upload_setting.showRemove && data.upload_setting.showRemove == 'true' ? true : false;
                    data.upload_setting.showUpload = data.upload_setting.showUpload && data.upload_setting.showUpload == 'true' ? true : false;

                    return obj.fileinput(data.upload_setting);
                }
            }
        }
    }

</script>