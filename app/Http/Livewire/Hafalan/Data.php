<?php

namespace App\Http\Livewire\Hafalan;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Hafalan;
use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Data extends Component
{
    use AuthorizesRequests;
    
    public function render()
    {
        $username = auth()->user()->username;

        $santri = Santri::where('nis', $username)->pluck('id');

        return view('livewire.hafalan.data',[
            'hafalans' => Hafalan::where('santri_id','=', $santri)->get()
        ]);
    }

    
}
