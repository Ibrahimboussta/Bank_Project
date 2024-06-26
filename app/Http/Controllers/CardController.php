<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schedule;

class CardController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
        $walletAmount = 0;
        $cards = Card::where('user_id', $user->id)->get();
        foreach ($cards as $card) {
            $walletAmount += $card->money;
        }
        return view('card.cart', compact('walletAmount'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();
        $cardnumber = rand(10000000000000, 99999999999999);
        $cvc = rand(100, 999);
        $rib = mt_rand((int) 100000000000000000000000, (int) 999999999999999999999999);
        $date_exp = Carbon::now()->addYears(5);
        $cards = Card::where('user_id', auth()->user()->id)->where('blocked', false)->get();
        // dd($cards->count());
        if ($cards->count() < 2) {
            Card::create([
                'user_id' => $user->id,
                'card_number' => $cardnumber,
                'cvc' => $cvc,
                'rib' => $rib,
                'date_expiration' => $date_exp,
                'money' => 99,
            ]);
            return back()->with("success", "card added successfully");
        }
        return back()->with("error", "you can't add more than two cards");
    }

    public function destroy(Card $card)
    {
        $cards = Card::where('user_id', auth()->user()->id)->where('blocked', false)->get();
        if ($cards->count() > 1) {
            $card->blocked = true;
            $card->money = 0;
            $card->save();
            return back()->with("success", "card blocked successfully");
        }
        return back()->with("error", "you can't delete this card");
    }
}
