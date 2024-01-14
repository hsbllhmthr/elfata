<?php

namespace App\Http\Livewire\Pembayaran;

use Livewire\Component;
use App\Models\Pembayaran;

class Lihat extends Component
{

    public Pembayaran $pembayaran;

    public function mount($id) {
        $this->pembayaran = Pembayaran::find($id);
    }   

    public function render(){
        return view('livewire.pembayaran.lihat');
    }   
}
