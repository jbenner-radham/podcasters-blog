@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Post</div>

                    <div class="panel-body">
                        <form class="ui form" action="{{ route('posts.store') }}" method="POST">
                            {!! csrf_field() !!}

                            <div class="field">
                                <textarea name="content"></textarea>
                            </div>

                            <div class="field post__tags">
                                <input type="text" name="tags" placeholder="comma,separated,tags">
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
        document.addEventListener('DOMContentLoaded', function (event) {
            new MediumEditor('[name="content"]');
        });
    </script>
@endsection
