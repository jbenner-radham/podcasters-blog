@extends('layouts.app')

@section('content')
    <h2>Posts</h2>

    <ul>
        @forelse ($posts as $post)
            <li>{{ strip_tags($post->name) }}</li>
        @empty
            <p>Sorry, no posts yet  :(</p>
        @endforelse
    </ul>
@endsection