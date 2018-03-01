<div class="col-md-12">
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#inputsetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Input Setting</span>
                </a>
            </div>
            <div id="inputsetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">

                    <div class="form-group">
                        <label for="valid" class="col-sm-3 m-0 control-label text-left">Tags</label>
                        <div class="col-sm-9">
                            <select multiple data-role="tagsinput" class="form-control">
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Washington">Washington</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="valid">Validation</label>
                        <div class="col-md-4">
                            <input id="valid" name="validation" type="text" placeholder="placeholder" class="form-control input-md">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! BBstyle($_this->path.DS.'css'.DS.'bootstrap-tagsinput.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'bootstrap-tagsinput.js') !!}
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
<script>
    $('.icp').iconpicker();
    $("select").tagsinput('items');
</script>