@extends('layouts.app')

@section('content')
    <article class="h-entry">
        <h2 class="p-name">{{ $post->name }}</h2>
        <div class="e-content">
            {{ $post->content }}
        </div>
    </article>
@endsection