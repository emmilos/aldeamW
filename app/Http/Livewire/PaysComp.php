<?php

namespace App\Http\Livewire;
use App\Models\pays;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class PaysComp extends Component
{
    use WithPagination;
 
    public $search = "";
    
    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGELIST;

    public $newPays = [];
    public $editPays = [];

    public function render()
    {

        Carbon::setLocale("fr");
        $searchCriteria = "%".$this->search."%";

        $data = [
            "Pays" => pays::where("libel_pays", "like", $searchCriteria)->latest()->paginate(10)
            ];
        return view('livewire.pays.index',$data)
                 ->extends("layouts.master")
                 ->section("contenu");
    }


    public function addPays(){

        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();

        // Ajouter un nouveau pays
        Pays::create($validationAttributes["newPays"]);

        $this->newPays = [];

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Pays créé avec succès!"]);
    }

    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des pays. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "pays_id" => $id
            ]
        ]]);
    }

    public function deletepays($id){
        Pays::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Pays supprimé avec succès!"]);
    }


}
