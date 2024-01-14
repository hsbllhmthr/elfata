<?php

namespace App\Http\Livewire\Presensi;

use Livewire\Component;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use App\Models\Presensi;

class Datas extends Component
{

    public Presensi $presensi;

    public function mount($cabang)
    {
        $cabangs = $cabang;
    }

    public function destroy($id)
    {
        Presensi::find($id)->delete();
        return redirect(route('presensi'))->with('status', 'Data berhasil terhapus');
    }

    public function render()
    {
        $cabangs = request()->segment(count(request()->segments()));

        return view('livewire.presensi.datas', [
            'presensis' => Presensi::where('cabang', '=', $cabangs)->get()
        ]);
    }
}
