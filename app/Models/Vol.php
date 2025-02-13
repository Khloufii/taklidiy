<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;

    protected $fillable = ['compagnie_aérienne', 'numéro_de_vol', 'date_départ', 'date_arrivée', 'lieu_départ', 'lieu_arrivée', 'places_disponibles', 'prix'];

    // Relation avec les réservations de vols
    public function reservationsVols()
    {
        return $this->hasMany(ReservationVol::class);
    }
}
