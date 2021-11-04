<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\localisation;
use Livewire\WithPagination;

class LocalisationComp extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.localisations.index', [
                "localisations" => localisation::latest()->paginate(10),
                ])
                ->extends("layouts.master")
                ->section("contenu");
    }
}
