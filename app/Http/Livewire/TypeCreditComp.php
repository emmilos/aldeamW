<?php

namespace App\Http\Livewire;

use App\Models\TypeCredit;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TypeCreditComp extends Component
{
    use WithPagination;

    public $search = "";

    protected $paginationTheme = "bootstrap";

    public function render()
    {

            Carbon::setLocale("fr");

            $searchCriteria = "%".$this->search."%";
            $data = [
                "typecredits" => TypeCredit::where("libel", "like", $searchCriteria)->latest()->paginate(10),
            ];

            return view('livewire.typecredits.index'  , $data)
                    ->extends("layouts.master")
                    ->section("contenu");
        }

        }



