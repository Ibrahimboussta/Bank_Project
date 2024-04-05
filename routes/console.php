<?php

use App\Models\Card;
use App\Models\Facture;
use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();



Artisan::command('showFacture', function () {
    $factures = Facture::find(1)->factures; // Replace 1 with the actual user ID
    foreach ($factures as $facture) {
        // Update facture data as needed
        $facture->update(['status' => 'Updated']);
    }

    $this->info('Factures updated successfully!');
    return 0;

});    

