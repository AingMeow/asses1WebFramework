@extends('layouts.master')

@section('content')
<div class="container">
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create New Post</a>
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline-block float-end">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection