<?php

namespace App\Http\Livewire\Pembayaran;

use App\Models\Santri;
use Livewire\Component;
use App\Models\User;
use App\Models\Pembayaran;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Tambah extends Component
{
    use AuthorizesRequests;
   
    public $santris;
    public $kelompok = '';
    public $tanggal = '';
    public $jumlah = '';
    public $sisa = '';
    public $ket = '';
    public $santri_id = '';    

    protected $rules = [
        'santri_id' => 'required|exists:santris,id',
        'kelompok' => 'required',
        'tanggal' => 'required',
        'jumlah' => 'required',
        'sisa' => 'required',
        'ket' => 'required',
    ];

    public function mount() {
        $this->santris = Santri::get(['id','nama']);
    }

    public function store(){
        $this->validate();
        Pembayaran::create([           
            'santri_id' => $this->santri_id,
            'kelompok' => $this->kelompok,
            'tanggal' => $this->tanggal,
            'jumlah' => $this->jumlah,
            'sisa' => $this->sisa,
            'ket' => $this->ket,
        ]);      

        return redirect(route('pembayaran'))->with('status','Data pembayaran santri berhasil disimpan.');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.pembayaran.tambah');
    }
}
