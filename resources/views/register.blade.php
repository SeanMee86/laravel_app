@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => 'user/login']) !!}
    <div class="form-group">
        {{Form::label('username', 'UserName')}}
        {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Enter Username'])}}
    </div>
    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Enter Password'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter E-mail'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary col-md-4'])}}
    </div>
    {!! Form::close() !!}

@endsection