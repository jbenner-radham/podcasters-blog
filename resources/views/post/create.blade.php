@extends('layouts.app')

@section('content')
    <div class="panel-body contact">
        <form class="ui form" action="{{ route('post.store') }}" method="POST" >
            {!! csrf_field() !!}

            <div class="field">
                <label>Name</label>
                <input name="name" placeholder="My Post Name" type="text">
            </div>

            <div class="field">
                <label>Content</label>
                <textarea name="content" rows="25"></textarea>
            </div>

            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
@endsection
