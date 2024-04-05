<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view("facture.facture");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */




    public function randomType()
    {
    }


    public function store(Request $request)
    {


        $price = rand(100, 1000);
        $services = ["wifi", 'electricity'];

        $randomType = array_rand($services);
        $type = $services[$randomType];
        // dd(array_rand($type));
        // dd($type[$randomType]);


        $user = Auth::user();


        Facture::create([
            "type" => $type,
            "amount" => $price,
            "user_id" => $user->id,

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Facture $facture)
    {
        //

        return view("facture.facture");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        request()->validate([
            'facture' => 'required',
        ]);


        $amount = $request->facture;
        $user = auth()->user();
        $cards = $user->cards;

        foreach ($cards as $card) {

            if ($card->money > $amount) {
                $card->money -= $amount;
                $card->save();
            }else{
                return back()->with('error', 'card not validate');
            }
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facture $facture)
    {
        //
    }
}
