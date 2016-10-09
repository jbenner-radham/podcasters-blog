@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Posts</h2>

                <ul>
                    @forelse ($posts as $post)
                        <small>
                            <i class="icon calendar"></i> <time datetime="{{ $post->created_at }}">@datetime($post->created_at)</time>
                        </small>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3>
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        {{ strip_tags($post->name) }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    @empty
                        <p>Sorry, no posts yet  :(</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
