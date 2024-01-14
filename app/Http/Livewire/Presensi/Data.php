<?php

namespace App\Http\Livewire\Presensi;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Presensi;
use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Data extends Component
{
    use AuthorizesRequests;

    public function render()
    {
        $username = auth()->user()->username;

        $santri = Santri::where('nis', $username)->pluck('id');

        return view('livewire.presensi.data', [
            'presensis' => Presensi::where('santri_id', '=', $santri)->get()
        ]);
    }
}
