<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\type_marge;
use Livewire\WithPagination;

class TypeMargeComp extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.typemarges.index', [
               "typemarges" => type_marge::latest()->paginate(5)
        ])
               ->extends("layouts.master")
               ->section("contenu");
    }
}
