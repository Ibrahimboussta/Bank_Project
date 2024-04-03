<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 
        "amount", 
        "user_id", 
        "paid",
    ];

    public function PaidFacture(){
        return $this->hasMany(PaidFacture::class);
}

public function User(){
    return $this->belongsTo(User::class);
}


}
