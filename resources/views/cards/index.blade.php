@extends('layout')

@section('content')
    <h1>All Cards</h1>
    <!-- trigger add form -->
    <a href="#" data-toggle="modal" data-target="#addNewCard">
        add new card
    </a>

    <table class="table-striped table-hover table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Notes</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cards as $card)
            <tr>
                <td>
                    <a href="/cards/{{ $card->id }}"> <!-- data-toggle="tooltip" data-placement="right" title="Tooltip on right" -->
                        {{ $card->title }}
                    </a>
                </td>
                <td></td>
                <td></td>
                <td>{{ $card->notes->count() }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

    @include('popup.card.add-new-card')
@stop
