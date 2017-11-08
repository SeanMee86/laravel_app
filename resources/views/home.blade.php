@extends('layouts.app')

@section('content')

    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque corporis sed veritatis! A fugit laborum nostrum odio quibusdam repellat.</p>

@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
