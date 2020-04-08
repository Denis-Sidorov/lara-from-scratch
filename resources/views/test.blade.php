@extends('layout')

@section('title')
    <h1>{{ $name }}</h1>
@endsection

@section('content')
    <p>{{ $post->body }}</p>
@endsection
