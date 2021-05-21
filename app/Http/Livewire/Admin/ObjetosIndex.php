<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Aporte;
use App\Models\User;
use App\Models\Objeto;

use Livewire\WithPagination;

class ObjetosIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $objetos = Objeto::where('user_id', auth()->user()->id)
                            ->where('codigoap', 'LIKE','%' . $this->search . "%")
                            ->latest('id')
                            ->paginate();

        return view('livewire.admin.objetos-index', compact('objetos'));
    }
}
