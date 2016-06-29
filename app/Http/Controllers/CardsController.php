<?php

namespace App\Http\Controllers;


use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        $card->load('notes.user');

        return view('cards.show', compact('card'));
    }

    public function store(Request $request, Card $card)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $card = new Card($request->all());
        $card->save();

        return back();
    }
}
