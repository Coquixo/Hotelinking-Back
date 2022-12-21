<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_UUID',
        'offer_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offert()
    {
        return $this->belongsTo(Offer::class);
    }
}
