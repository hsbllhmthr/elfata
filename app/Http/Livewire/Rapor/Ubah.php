<?php

namespace App\Http\Livewire\Rapor;

use App\Models\Santri;
use App\Models\User;
use App\Models\Rapor;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    public Rapor $rapor;
    use AuthorizesRequests;

    public $santris;
    
    protected function rules(){

        return [
            'rapor.santri_id' => 'required|exists:santris,id',
            'rapor.musyrif'  => 'required|max:255,'.$this->rapor->id,
            'rapor.tanggal'  => 'required',
            'rapor.jumlahhafalan'  => 'required',
            'rapor.sektor'  => 'required',
            'rapor.semester'  => 'required',
            'rapor.nilai_a1'  => 'required',
            'rapor.nilai_a2'  => 'required',
            'rapor.nilai_a3'  => 'required',
            'rapor.nilai_a4'  => 'required',
            'rapor.nilai_b1'  => 'required',
            'rapor.nilai_b2'  => 'required',
            'rapor.nilai_b3'  => 'required',
            'rapor.nilai_c1'  => 'required',
            'rapor.nilai_c2'  => 'required',
            'rapor.nilai_c2_ket'  => 'required',
            'rapor.nilai_c1_ket'  => 'required',
            'rapor.nilai_b3_ket'  => 'required',
            'rapor.nilai_b2_ket'  => 'required',
            'rapor.nilai_b1_ket'  => 'required',
            'rapor.nilai_a4_ket'  => 'required',
            'rapor.nilai_a3_ket'  => 'required',
            'rapor.nilai_a2_ket'  => 'required',
            'rapor.nilai_a1_ket'  => 'required',
            'rapor.jumlah'  => 'required',
        ];
    }

    public function mount($id){

        $this->rapor = Rapor::find($id);
        $this->santris = Santri::get(['id','nama']);
    }

    public function update(){
        
        $this->validate();

        $this->rapor->update();

        return redirect(route('rapor'))->with('status','Data rapor berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-items', User::class);
        return view('livewire.rapor.ubah');
    }
}
