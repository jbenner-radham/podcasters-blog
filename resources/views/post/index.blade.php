@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Posts</h2>

            <ul>
                @forelse ($posts as $post)
                    <li>
                        <small>
                            <i class="icon calendar"></i> <time datetime="{{ $post->created_at }}">@datetime($post->created_at)</time>
                        </small>
                        <br>
                        <a href="{{ route('post.show', $post->id) }}">
                            {{ strip_tags($post->name) }}
                        </a>
                    </li>
                @empty
                    <p>Sorry, no posts yet  :(</p>
                @endforelse
            </ul>
        </div>
    </div>
@endsection