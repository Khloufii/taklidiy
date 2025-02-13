<?php

namespace App\Models;
use App\Models\User;
use App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationHotel extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'hotel_id', 'date_arrivee', 'date_depart'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
