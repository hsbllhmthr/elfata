<?php

namespace App\Http\Livewire\Santri;

use App\Models\Role;
use App\Models\User;
use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    public Santri $santri;
    use AuthorizesRequests;

    protected function rules()
    {

        return [
            'santri.nis' => 'required|unique:santris,nis,' . $this->santri->id,
            'santri.cabang' => 'nullable',
            'santri.sektor' => 'nullable',
            'santri.nama' => 'required',
            'santri.tempatlahir' => 'required',
            'santri.tgllahir' => 'required',
            'santri.jk' => 'nullable',
            'santri.saudara' => 'required',
            'santri.anakke' => 'required',
            'santri.alamat' => 'required',
            'santri.umur' => 'required',
            'santri.nohp' => 'required',
            'santri.asalsekolah' => 'required',
            'santri.tglmasuk' => 'required',
            'santri.namaayah' => 'required',
            'santri.namaibu' => 'required',
            'santri.kerjaayah' => 'required',
            'santri.kerjaibu' => 'required',
            'santri.pendayah' => 'required',
            'santri.pendibu' => 'required',
        ];
    }

    public function mount($id)
    {

        $this->santri = Santri::find($id);
    }

    public function update()
    {

        $this->validate();

        $this->santri->update();

        return redirect(route('santri'))->with('status', 'Data santri berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-items', User::class);
        return view('livewire.santri.ubah');
    }
}
