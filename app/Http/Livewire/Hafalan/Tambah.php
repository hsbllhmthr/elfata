<?php

namespace App\Http\Livewire\Hafalan;

use App\Models\Santri;
use Livewire\Component;
use App\Models\User;
use App\Models\Hafalan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Tambah extends Component
{
    use AuthorizesRequests;

    public $santris;
    public $halaqah = '';
    public $tanggal = '';
    public $isi = '';
    public $nilai1 = '';
    public $nilai2 = '';
    public $nilai3 = '';
    public $link = '';
    public $santri_id = '';

    protected $rules = [
        'santri_id' => 'required|exists:santris,id',
        'halaqah' => 'required',
        'tanggal' => 'required',
        'isi' => 'required',
        'nilai1' => 'required',
        'nilai2' => 'required',
        'nilai3' => 'required',
        'link' => 'required',
    ];

    public function mount()
    {
        $this->santris = Santri::get(['id', 'nama']);
    }

    public function store()
    {
        $this->validate();
        Hafalan::create([
            'santri_id' => $this->santri_id,
            'halaqah' => $this->halaqah,
            'tanggal' => $this->tanggal,
            'isi' => $this->isi,
            'nilai1' => $this->nilai1,
            'nilai2' => $this->nilai2,
            'nilai3' => $this->nilai3,
            'link' => $this->link,
        ]);

        return redirect(route('hafalan'))->with('status', 'Data hafalan santri berhasil disimpan.');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.hafalan.tambah');
    }
}
