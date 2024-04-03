<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'card_number',
        'cvc',
        'date_expiration',
        'rib',
        'blocked',
        'money',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
