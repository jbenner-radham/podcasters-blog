@extends('layouts.app')

@section('content')
    <h2>Posts</h2>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->name }}</li>
        @endforeach
    </ul>
@endsection