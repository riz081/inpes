<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable = [
        'request',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
