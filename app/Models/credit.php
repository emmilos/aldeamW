<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    use HasFactory;

    public function produit(){
        return $this->belongsTo(TypeCredit::class, "type_credit_id", "id");
    }

    public function client(){
        return $this->belongsTo(Client::class, "client_id", "id");
    }

    public function ObjetCredit(){
        return $this->belongsTo(Objetscredit::class, "objets_credit_id", "id");
    }

    public function typemarge(){
        return $this->belongsTo(type_marge::class, "type_marges_id", "id");
    }
}
