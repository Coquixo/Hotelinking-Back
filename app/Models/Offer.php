<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'offerName',
        'offer_id'
    ];

    protected $hidden = [
        'offer_id'
    ];

    public function code()
    {
        return $this->hasMany(Code::class);
    }
}
