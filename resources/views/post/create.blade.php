@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/latest/css/medium-editor.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/medium-editor/5.22.0/css/themes/tim.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Post</div>

                    <div class="panel-body">
                        <form class="ui form" action="{{ route('post.store') }}" method="POST" >
                            {!! csrf_field() !!}

                            <div class="field">
                                <textarea name="content"></textarea>
                            </div>

                            <div class="field post__tags">
                                <!-- tags -->
                            </div>

                            <br>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            new MediumEditor('[name="content"]');
            tagify('.post__tags', ['hello', 'world']);
        });
    </script>
@endsection
