<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Evento;
//use App\Models\Beneficiario;

use Livewire\WithPagination;

class BeneficiariosIndex extends Component
{
    
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {


        //$beneficiario = Beneficiario::all('evento_id', );

        $beneficiarios = Evento::where('user_id', auth()->user()->id)
                                ->where('name', 'LIKE','%' . $this->search . "%")
                                ->latest('id')
                                ->paginate(5);

        

        return view('livewire.admin.beneficiarios-index', compact('beneficiarios'));
    }
}
