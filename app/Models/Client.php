<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function locations(){
        return $this->hasMany(Location::class);
    }


    public function localisations(){
        return $this->belongsTo(Localisation::class, "localisation_id", "id");

    }

    public function pays(){
        return $this->belongsTo(pays::class, "pays_id", "id");

    }

    public function Credit(){
        return $this->hasMany(credit::class);
    }
}
