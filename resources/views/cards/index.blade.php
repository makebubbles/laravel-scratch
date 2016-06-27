@extends('layout')

@section('content')
    <h1>
        All Cards

        <!-- trigger add form -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addNewCard">
            ADD
        </button>
    </h1>

    @foreach ($cards as $card)
    <div>
        <a href="/cards/{{ $card->id }}">
            {{ $card->title }}
            <span class="badge">{{ $card->notes->count() }}</span>
        </a>
    </div>
    @endforeach

    @include('popup.card.add-new-card')
@stop
