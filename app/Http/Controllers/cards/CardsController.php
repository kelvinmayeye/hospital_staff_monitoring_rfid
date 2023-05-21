<?php

namespace App\Http\Controllers\cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cards\Card;

class CardsController extends Controller
{
    public function allCards(){
        $cards = Card::all();
        return view('pages.cards.all_cards',compact('cards'));
    }
}