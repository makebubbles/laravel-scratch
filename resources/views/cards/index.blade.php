@extends('layout')

@section('content')
    <h1>All Cards</h1>
    <!-- trigger add form -->
    <a href="#" data-toggle="modal" data-target="#addNewCard">
        add new card
    </a>

    @foreach ($cards as $card)
    <div>
        <a href="/cards/{{ $card->id }}"> <!-- data-toggle="tooltip" data-placement="right" title="Tooltip on right" -->
            {{ $card->title }}
            <span class="badge">{{ $card->notes->count() }}</span>
        </a>
    </div>
    @endforeach

    @include('popup.card.add-new-card')
@stop
