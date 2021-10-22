<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TypeCreditComp extends Component
{
    public function render()
    {
        return view('livewire.typecredits.index')
                ->extends("layouts.master")
                ->section("contenu");
    }
}
