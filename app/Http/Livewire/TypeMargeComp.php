<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\type_marge;

class TypeMargeComp extends Component
{
    public function render()
    {
        return view('livewire.typemarges.index', [
               "typemarges" => type_marge::lastest()->paginate(5)
        ])
               ->extends("layouts.master")
               ->section("contenu");
    }
}
