<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller {




    public function index()
    {
        $users = User::all();
        $cards = Auth::user()->cards;
        
        return view('transfer.transfer', compact('users', 'cards'));
    }

    public function store(Request $request)
{
    $request->validate([
        'rib' => 'required',
        'amount' => 'required',
        'card_number' => 'required'
    ]);

    // Find the card associated with the provided rib
    $destinationCard = Card::where('rib', $request->rib)->first();
    $transferCard = Card::where('card_number', $request->card_number)->first();
    
    if ($destinationCard) {
        // Check if the destina$destinationCard belongs to a user other than the authenticated user
        if ($destinationCard && $destinationCard != $transferCard ) {
            // Create the transfer
            Transfer::create([
                'rib' => $request->rib,
                'amount' => $request->amount,
                'card_number' => $request->card_number
            ]);
            
            // Deduct the transferred amount from the selected card's balance

            if ($transferCard->money >= $request->amount && $request->amount > 0 ) {
                $transferCard->money -= $request->amount;
                $destinationCard->money += $request->amount;
                $destinationCard->save();
                $transferCard->save();

                return back()->with('success', 'Transfer successful');
            } else {
                return back()->with('error', 'Insufficient balance on the selected card or amount is invalid');
            }
        } else {
            // If the card belongs to the authenticated user
            return back()->with('error', 'You cannot transfer to your own card');
        }
    } else {
        // If no card with the provided rib is found
        return back()->with('error', 'No card found with this rib');
    }
}

}
