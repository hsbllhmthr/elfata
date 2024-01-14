<?php

namespace App\Http\Livewire\Presensi;

use App\Models\Santri;
use App\Models\User;
use App\Models\Presensi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    public Presensi $presensi;
    use AuthorizesRequests;

    public $santris;

    protected function rules()
    {

        return [
            'presensi.santri_id' => 'required|exists:santris,id',
            'presensi.tanggal' => 'required',
            'presensi.cabang' => 'required',
            'presensi.ket' => 'required|max:255,' . $this->presensi->id,
        ];
    }

    public function mount($id)
    {

        $this->presensi = Presensi::find($id);
        $this->santris = Santri::get(['id', 'nama']);
    }

    public function update()
    {

        $this->validate();

        $this->presensi->update();

        return redirect(route('presensi'))->with('status', 'Data presensi berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-items', User::class);
        return view('livewire.presensi.ubah');
    }
}
