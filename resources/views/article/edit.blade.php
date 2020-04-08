@extends('layout.main')

@section('content')
    <div style="margin-left: 3em;">
        <h1>Edit Article</h1>
        <form action="{{ route('articles.update', $article) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <div><label for="title">Title:</label></div>
                <input type="text" name="title" id="title" value="{{ $article->title }}">
                @error('title')<p>{{ $message }}</p>@enderror
            </div>
            <div>
                <div><label for="description">Description:</label></div>
                <textarea name="description" id="description" cols="30" rows="10">{{ $article->description }}</textarea>
                @error('description')<p>{{ $message }}</p>@enderror
            </div>
            <div>
                <div><label for="content">Content:</label></div>
                <textarea name="content" id="content" cols="30" rows="10">{{ $article->content }}</textarea>
                @error('content')<p>{{ $message }}</p>@enderror
            </div>
            <input type="submit">
        </form>
    </div>
@endsection
