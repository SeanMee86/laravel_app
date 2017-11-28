@extends('layouts.app')

@section('content')

    <h1>Please Login or Register</h1>
    {!! Form::open(['url' => 'user/login']) !!}
    <div class="form-group">
        {{Form::label('username', 'UserName')}}
        {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Enter Username'])}}
    </div>
    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Enter Password'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary col-md-4'])}}
    </div>
    {!! Form::close() !!}

    <a href="/register"><button class="btn btn-info">Register</button></a>

@endsection