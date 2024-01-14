<?php

namespace App\Http\Livewire\Pembayaran;

use Livewire\Component;
use App\Models\Hafalan;

class Detail extends Component
{

    public Hafalan $hafalan;

    protected $queryString = ['tanggal'];

    public function mount($tgl) {
        // $tanggal = $this->hafalan = Hafalan::find($tgl);
        $tanggal = $tgl;
    }     

    public function destroy($id){
        Hafalan::find($id)->delete();
        return redirect(route('hafalan'))->with('status', 'Data berhasil terhapus');
    }

    public function render($tgl){

        return view('livewire.hafalan.detail',[
            'hafalans' => Hafalan::where('tanggal', this->tgl)->get()
        ]);
    }

    
}
