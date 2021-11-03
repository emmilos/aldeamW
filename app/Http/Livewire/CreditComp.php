<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use App\Models\credit;
use Livewire\Component;
use App\Models\TypeCredit;
use Livewire\WithPagination;

class CreditComp extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.credits.index', [
            "credits" => credit::latest()->paginate(10),
            "typecredits"=> TypeCredit::orderBy("libel", "ASC")->get()
        ] )
           ->extends("layouts.master")
           ->section("contenu");
    }
}
