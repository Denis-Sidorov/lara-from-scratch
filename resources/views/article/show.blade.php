@extends('layout.main')

@section('content')
    <div><a href="{{ route('articles.edit', $article) }}">Edit</a></div>
    <div>
        <form action="{{ route('articles.delete', $article) }}" method="post" id="delete-article">
            @csrf
            @method('delete')
            <a href="#" onclick="document.getElementById('delete-article').submit();">Delete</a>
        </form>
    </div>
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->content }}</p>
    </div>
@endsection
