<?php

namespace App\Http\Livewire\Guru;

use App\Models\Role;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    public Guru $guru;
    use AuthorizesRequests;

    protected function rules()
    {

        return [
            'guru.stambuk' => 'required|unique:gurus,stambuk,' . $this->guru->id,
            'guru.nama' => 'required',
            'guru.cabang' => 'nullable',
            'guru.sektor' => 'required',
            'guru.jk' => 'nullable',
            'guru.tempatlahir' => 'required',
            'guru.tgllahir' => 'required',
            'guru.statusnikah' => 'nullable',
            'guru.saudara' => 'required',
            'guru.anakke' => 'required',
            'guru.namaayah' => 'required',
            'guru.namaibu' => 'required',
            'guru.kerjaayah' => 'required',
            'guru.kerjaibu' => 'required',
            'guru.tanggalkontrak' => 'required',
            'guru.asal' => 'required',
            'guru.alamattinggal' => 'required',
            'guru.email' => 'required',
            'guru.nohp' => 'required',
            'guru.tk' => 'required',
            'guru.sd' => 'required',
            'guru.smp' => 'required',
            'guru.sma' => 'required',
            'guru.universitas' => 'required',
            'guru.jurusan' => 'required',
        ];
    }

    public function mount($id)
    {

        $this->guru = Guru::find($id);
    }

    public function update()
    {

        $this->validate();

        $this->guru->update();

        return redirect(route('guru'))->with('status', 'Data guru berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-items', User::class);
        return view('livewire.guru.ubah');
    }
}
