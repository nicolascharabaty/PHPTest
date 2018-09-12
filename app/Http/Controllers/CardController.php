<?php

namespace App\Http\Controllers;

use App\Card;
 
class CardController extends Controller
{
    public function index()
    {
        return Card::all();
    }
 
    public function show($id)
    {
        return Card::find($id);
    }

    public function store(Request $request)
    {
        return Card::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->update($request->all());

        return $card;
    }

    public function delete(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->delete();

        return 204;
    }
}
