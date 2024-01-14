<?php

namespace App\Http\Livewire\Guru;

use Livewire\Component;
use App\Models\Guru;

class Lihat extends Component
{

    public Guru $guru;

    public function mount($id) {
        $this->guru = Guru::find($id);
    }   

    public function render(){
        return view('livewire.guru.lihat');
    }
}
