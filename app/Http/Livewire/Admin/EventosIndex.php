<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Evento;

use Livewire\WithPagination;

class EventosIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $eventos = Evento::where('user_id', auth()->user()->id)
                                ->where('name', 'LIKE','%' . $this->search . "%")
                                ->latest('id')
                                ->paginate(5);


        return view('livewire.admin.eventos-index', compact('eventos'));
    }
}
  