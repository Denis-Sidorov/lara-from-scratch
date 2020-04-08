@extends('layout.main')

@section('content')
    <div style="margin-left: 3em;">
        <h1>Create Article</h1>
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <div>
                <div><label for="title">Title:</label></div>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')<p>{{ $message }}</p>@enderror
            </div>
            <div>
                <div><label for="description">Description:</label></div>
                <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')<p>{{ $message }}</p>@enderror
            </div>
            <div>
                <div><label for="content">Content:</label></div>
                <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                @error('content')<p>{{ $message }}</p>@enderror
            </div>
            <input type="submit">
        </form>
    </div>
@endsection
