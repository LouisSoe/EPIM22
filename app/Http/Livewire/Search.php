<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ekstrakurikuler;


class Search extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.search',[
          'eskul' => ekstrakurikuler::where('nama_eskul', 'deskripsi', '%'.$this->search.'%')->paginate(10),
        ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
