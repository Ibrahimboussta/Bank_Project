<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaidFacture extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id", 
        "facture_id", 
        "amount", 
        "cart_id",
    ];
    public function Facture(){
        return $this->belongsTo(Facture::class);
}
}
