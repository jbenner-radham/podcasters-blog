@extends('layouts.app')

@section('content')
    <div class="panel-body contact">
        <form class="ui form" action="{{ route('post.store') }}" method="POST" >
            {!! csrf_field() !!}

            <div class="field">
                <label>Name</label>
                <textarea name="name"></textarea>
                {{-- <input name="name" placeholder="My Post Name" type="text"> --}}
            </div>

            <div class="field">
                <label>Content</label>
                <textarea name="content"></textarea>
            </div>

            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        var name    = new MediumEditor('[name="name"]', {toolbar: true});
        var content = new MediumEditor('[name="content"]');
    </script>
@endsection
