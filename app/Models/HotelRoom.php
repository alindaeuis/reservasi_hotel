<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'type', 'status', 'price'];

    public function reservationTables() {
        return $this->hasMany(Reservation::class);
    }
}
