<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjetsCredit extends Model
{
    use HasFactory;


    public function Credit(){
        return $this->hasMany(credit::class);
    }
}
