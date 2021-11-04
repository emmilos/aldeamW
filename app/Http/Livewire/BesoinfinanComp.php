<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BesoinFinancement;

class BesoinfinanComp extends Component
{
    public function render()
    {
        return view('livewire.besoinfinancements.index', [
            "besoinfinancements"=>BesoinFinancement::orderBy('libelle', 'DESC')->get()
        ])
               ->extends("layouts.master")
               ->section("contenu");
    }
}
