@extends('layout.main')

@section('content')
    <div>
        <a href="{{ route('articles.create') }}">Create Article</a>
    </div>
    <div class="">
        @foreach($articles as $article)
            <div>
                <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                <p>{{ $article->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
