<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'offerName',
    ];


    public $timestamps = false;
    public function code()
    {
        return $this->hasMany(Code::class);
    }
}
