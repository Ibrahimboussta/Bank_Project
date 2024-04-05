<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Loan;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $walletAmount = 0;
        $cards = Card::where('user_id', $user->id)->get();
        foreach ($cards as $card) {
            $walletAmount += $card->money;
        }
        return view('Loan.loan', compact('walletAmount'));
    }
    public function store(Request $request)
    {
        request()->validate([
            'user_id' => 'required',
            'card_id' => 'required',
            'amount' => 'required',
        ]);

        $user = User::where('id', $request->user_id)->first();
        $user->loan = true;
        $user->save();
        $walletAmount = 0;
        $cards = Card::where('user_id', $user->id)->get();
        $activeLoans = Loan::where('loan_end', false)->where('user_id', $user->id)->get();
        foreach ($cards as $card) {
            $walletAmount += $card->money;
        }
        $amountLimit = $walletAmount * 2;
        $cardUse = Card::where('id', $request->card_id)->first();
        if ($amountLimit > $request->amount && $activeLoans->count() < 1) {
            $cardUse->money += $request->amount;
            $cardUse->save();
            Loan::create([
                'user_id' => $request->user_id,
                'card_id' => $request->card_id,
                'amount' => $request->amount,
            ]);
        }
        Transaction::create([
            'user_id' => $request->user_id,
            'card_id' => $request->card_id,
            'amount' => $request->amount,
            'receiver'=>'take loan',
        ]);
        return back();
    }
}
