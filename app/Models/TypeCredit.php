<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCredit extends Model
{
    use HasFactory;



    public function Credits(){
        return $this->hasMany(Credit::class);
    }

}
