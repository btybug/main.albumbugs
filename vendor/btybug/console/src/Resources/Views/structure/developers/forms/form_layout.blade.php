{!! Form::open(['class' => 'bty-form-5']) !!}
    {!! Form::hidden('form_id',$form->id) !!}
    @include('forms.'.$form->slug,['form' => $form])
{!! Form::close() !!}