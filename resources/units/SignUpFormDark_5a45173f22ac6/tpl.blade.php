{!! BBstyle($_this->path.DS.'css/main.css') !!}

<div class="login-form" bb-main-wrapper>

    <div class="row header">
        <div class="col-md-12">
            <h1>Create Post</h1>
            <span>Fill out the form below to create new post</span>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="bb-form-area connectedSortable"></div>
                </div>
                <div class="col-md-6">
                    <div class="bb-form-area connectedSortable"></div>
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="bb-form-area connectedSortable"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="unit-area"></div>
        </div>
    </div>

    <div class="row footer">
        <div class="col-md-12">
            <input type="submit" name="submit" value="Save" class="button" />
        </div>
    </div>

</div>