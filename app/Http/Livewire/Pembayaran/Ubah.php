<?php

namespace App\Http\Livewire\Pembayaran;

use App\Models\Santri;
use App\Models\User;
use App\Models\Pembayaran;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    public Pembayaran $pembayaran;
    use AuthorizesRequests;

    public $santris;
    
    protected function rules(){

        return [
            'pembayaran.santri_id' => 'required|exists:santris,id',
            'pembayaran.kelompok' => 'required|max:255,'.$this->pembayaran->id,
            'pembayaran.tanggal' => 'required',
            'pembayaran.jumlah' => 'required',
            'pembayaran.sisa' => 'required',
            'pembayaran.ket' => 'required',
        ];
    }

    public function mount($id){

        $this->pembayaran = Pembayaran::find($id);
        $this->santris = Santri::get(['id','nama']);
    }

    public function update(){
        
        $this->validate();

        $this->pembayaran->update();

        return redirect(route('pembayaran'))->with('status','Data pembayaran berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-items', User::class);
        return view('livewire.pembayaran.ubah');
    }
}
