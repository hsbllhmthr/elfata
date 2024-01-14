<?php

namespace App\Http\Livewire\Santri;

use Livewire\Component;
use App\Models\Santri;

class Lihat extends Component
{

    public Santri $santri;

    public function mount($id) {
        $this->santri = Santri::find($id);
    }   

    public function render(){
        return view('livewire.santri.lihat');
    }
}
