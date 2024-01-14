<?php

namespace App\Http\Livewire\Rapor;

use Livewire\Component;
use App\Models\Rapor;

class Lihat extends Component
{

    public Rapor $rapor;
    public $skala;

    public function mount($id) {
        $this->rapor = Rapor::find($id);
    }   

    public function render(){
        return view('livewire.rapor.lihat');
    }
}
