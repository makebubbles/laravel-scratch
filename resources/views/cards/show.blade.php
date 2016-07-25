@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $card->title }}</h1>

            <ul class="list-group">
            @foreach($card->notes as $note)
                <li class="list-group-item">
                    {{ $note->body }}
                    <a href="/notes/{{ $note->id }}/edit" class="">Edit</a>
                    <a href="#" class="pull-right">{{ $note->user->username }}</a>
                </li>
            @endforeach
            </ul>

            <hr>
            <h4>Add a New Note</h4>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>
        </div>
    </div>
@stop
