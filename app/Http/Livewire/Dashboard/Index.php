<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Santri;
use App\Models\Guru;
use App\Models\Presensi;
use App\Models\Hafalan;
use App\Models\Pembayaran;
use App\Models\Rapor;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index', [
            'santris' => Santri::all(),
            'gurus' => Guru::all(),
            'presensis' => Presensi::all(),
            'hafalans' => Hafalan::all(),
            'pembayarans' => Pembayaran::all(),
            'rapors' => Rapor::all()
        ]);
    }
}
