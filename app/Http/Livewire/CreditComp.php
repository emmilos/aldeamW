<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use App\Models\Client;
use App\Models\credit;
use Livewire\Component;
use App\Models\type_marge;
use App\Models\TypeCredit;
use App\Models\ObjetsCredit;
use Livewire\WithPagination;
use App\Models\BesoinFinancement;

class CreditComp extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.credits.index', [
            "credits" => credit::latest()->paginate(10),
            "typecredits"=> TypeCredit::orderBy("libel", "ASC")->get(),
            "Clients"=> Client::orderBy("id", "ASC")->get(),
            "typemarges"=> type_marge::orderBy("libel", "ASC")->get(),
            "besoinfinancements"=> BesoinFinancement::orderBy("libelle", "ASC")->get(),
            "ObjetsCredits"=> ObjetsCredit::orderBy("libelle", "ASC")->get()
        ] )
           ->extends("layouts.master")
           ->section("contenu");
    }
}
