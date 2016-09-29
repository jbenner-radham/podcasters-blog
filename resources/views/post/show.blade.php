@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <article class="h-entry">
                <h2 class="p-name">{!! $post->name !!}</h2>
                <div class="e-content">
                    {!! $post->content !!}
                </div>
            </article>
        </div>
    </div>
@endsection