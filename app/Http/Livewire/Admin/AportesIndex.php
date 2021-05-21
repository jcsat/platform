<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Aporte;
use App\Models\User;
use App\Models\Evento;

use Livewire\WithPagination;

class AportesIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $aportes = Aporte::where('user_id', auth()->user()->id)
                            ->where('codigoap', 'LIKE','%' . $this->search . "%")
                            ->latest('id')
                            ->paginate();

        return view('livewire.admin.aportes-index', compact('aportes'));
    }
} 
  