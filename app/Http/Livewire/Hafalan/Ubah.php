<?php

namespace App\Http\Livewire\Hafalan;

use App\Models\Santri;
use App\Models\User;
use App\Models\Hafalan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    public Hafalan $hafalan;
    use AuthorizesRequests;

    public $santris;

    protected function rules()
    {

        return [
            'hafalan.santri_id' => 'required|exists:santris,id',
            'hafalan.halaqah' => 'required|max:255,' . $this->hafalan->id,
            'hafalan.tanggal' => 'required',
            'hafalan.isi' => 'required',
            'hafalan.nilai1' => 'required',
            'hafalan.nilai2' => 'required',
            'hafalan.nilai3' => 'required',
            'hafalan.link' => 'required',
        ];
    }

    public function mount($id)
    {

        $this->hafalan = Hafalan::find($id);
        $this->santris = Santri::get(['id', 'nama']);
    }

    public function update()
    {

        $this->validate();

        $this->hafalan->update();

        return redirect(route('hafalan'))->with('status', 'Data hafalan berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-items', User::class);
        return view('livewire.hafalan.ubah');
    }
}
