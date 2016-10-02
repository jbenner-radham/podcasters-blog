@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <article class="h-entry panel-body">
                        <h2 class="p-name">{{ strip_tags($post->name) }}</h2>
                        <div class="e-content">
                            {!! $post->content !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            tagify('.h-entry', @json($post->tagNames));
        });
    </script>
@endsection
