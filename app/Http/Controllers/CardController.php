<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Models\Card;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cards = Card::all();

        return view('card.index', ['cards' => $cards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardRequest $request)
    {
            $card = new Card();
            $card -> city = $request -> city;
            $card -> hotel = $request -> hotel;
            $card -> description = $request -> description;
            $card -> persons = $request -> persons;
            $card -> nights = $request -> nights;
            $card -> price = $request -> price;
            $card -> date_expiry = $request -> date_expiry;

        if ($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/image', $fileNameToStore);
            }
            // Else add a dummy image
            else {
            $fileNameToStore = 'noimage.jpg';
            }

            $card->photo = $fileNameToStore;

            $card->save();

            return redirect()->route('card.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        //
    }

    public function searchAjax() {

        $search = request()->query('search');
        
        $cards = Card::where('city', 'LIKE', "%$search%")
            ->orWhere('nights', 'LIKE', "%$search%")
            ->orWhere('persons', 'LIKE', "%$search%")
            ->orWhere('price', 'LIKE', "%$search%")
            ->get();

         return response()->json($cards);
    }
}
