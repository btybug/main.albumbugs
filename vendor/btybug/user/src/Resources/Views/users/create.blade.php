@extends('btybug::layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h2>Create User</h2>
        </div>
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal']) !!}
                <div class="form-group">
                    <label for="name">Username:</label>
                    {!! Form::text('username',null,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    {!! Form::email('email',null,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    {!! Form::password('password',['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('JS')

@stop
