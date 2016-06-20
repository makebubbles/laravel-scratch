@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>

            <ul class="list-group">
            @foreach($card->notes as $note)
                <li class="list-group-item">
                    {{ $note->body }}
                    <a href="#" class="pull-right">{{ $note->user->username }}</a>
                </li>
            @endforeach
            </ul>
            
            <hr>
            <h3>Add a New Note</h3>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>
            
            @if(count($errors))
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>

                            @foreach($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            
        </div>
    </div>
@stop