<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * return the list of all cards
     */
    public function get(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids === null) {
            return 'hello';
        }

        return Card::whereIn('id', array(1))->get();
    }

    public function store(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');
        $relatedCards = $request->input('related_cards');

        $newCard = new Card();
        $newCard->title = $title;
        $newCard->content = $content;
        $newCard->related_cards = $relatedCards;
        $newCard->save();

        return json_encode(array(
           'status' => 'success',
           'code' => 200,

        ));
    }

    public function update(Request $request){
        $id = $request->input('id');
        $card= Card::all()->find('id',$id);

        $title = $request->input('title');
        $content = $request->input('content');
        $relatedCards = $request->input('related_cards');

        $card->title = $title;
        $card->content = $content;
        $card->related_cards = $relatedCards;
        $card->save();
    }
}
