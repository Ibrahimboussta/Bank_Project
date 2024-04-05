<?php

use App\Models\Card;
use App\Models\Facture;
use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;


Schedule::call(function () {
    try {
        User::all()->each(function ($user) {
            if ($user) {
                $cardRib = Loan::where('user_id', $user->id)->where('loan_end', false)->first();
                if ($user->loan) {
                    $card = Card::where('id', $cardRib->card_id)->first();
                    $card->money -= ($cardRib->amount * 0.1);
                    $card->save();
                    $cardRib->time_paid += 1;
                    $cardRib->save();
                    if ($cardRib->time_paid == 10) {
                        $user->loan = false;
                        $user->save();
                        $cardRib->loan_end = true;
                        $cardRib->save();
                    }
                }
            }
            return back();
        });

    } catch (\Exception $e) {
        dd('Scheduled card deduction failed: ' . $e->getMessage());
    }
})->everyFiveSeconds();



Artisan::command('showFacture', function () {
    $factures = Facture::find(1)->factures; // Replace 1 with the actual user ID
    foreach ($factures as $facture) {
        // Update facture data as needed
        $facture->update(['status' => 'Updated']);
    }

    $this->info('Factures updated successfully!');
    return 0;

});    

