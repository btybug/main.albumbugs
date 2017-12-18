{!! Form::open(['class' => 'bty-form-5']) !!}
    <h2>Create Post</h2>
    {!! Form::hidden('form_id',$form->id) !!}
    <fieldset>
        <div>
            {!! Form::text('title',null,['class' => 'bty-input-label-5','placeholder' => 'Enter Post title']) !!}
            <label>What's your post title?</label>
        </div>
    </fieldset>
    <fieldset>
        <div class="bty-input-select-1">
            {!! Form::select('status',['draft' => 'Draft','pending' => 'Pending','published' => 'Published'],null,['class' => 'form-control input-md']) !!}
        </div>
    </fieldset>
    <fieldset>
        {!! Form::textarea('description',null,['id' => 'post-desc','class' => 'bty-textarea-1','placeholder' => 'More About Post']) !!}
    </fieldset>

    <button type="submit" class="bty-btn bty-btn-save"><span>Save</span></button>
{!! Form::close() !!}