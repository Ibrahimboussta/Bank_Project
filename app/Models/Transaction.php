<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'card_id',
        'amount',
        'receiver',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function card(){
        return $this->belongsTo(Card::class);
    }
}
