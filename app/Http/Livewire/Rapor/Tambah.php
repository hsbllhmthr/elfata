<?php

namespace App\Http\Livewire\Rapor;

use App\Models\Santri;
use Livewire\Component;
use App\Models\User;
use App\Models\Rapor;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Tambah extends Component
{
    use AuthorizesRequests;
   
    public $santris;
    public $santri_id  = '';
    public $musyrif  = '';
    public $tanggal  = '';
    public $jumlahhafalan  = '';
    public $sektor  = '';
    public $semester  = '';
    public $nilai_a1  = '';
    public $nilai_a2  = '';
    public $nilai_a3  = '';
    public $nilai_a4  = '';
    public $nilai_b1  = '';
    public $nilai_b2  = '';
    public $nilai_b3  = '';
    public $nilai_c1  = '';
    public $nilai_c2  = '';
    public $nilai_c2_ket  = '';
    public $nilai_c1_ket  = '';
    public $nilai_b3_ket  = '';
    public $nilai_b2_ket  = '';
    public $nilai_b1_ket  = '';
    public $nilai_a4_ket  = '';
    public $nilai_a3_ket  = '';
    public $nilai_a2_ket  = '';
    public $nilai_a1_ket  = '';
    public $jumlah  = '';

    protected $rules = [
        'santri_id' => 'required|exists:santris,id',
        'musyrif'  => 'required',
        'tanggal'  => 'required',
        'jumlahhafalan'  => 'required',
        'sektor'  => 'required',
        'semester'  => 'required',
        'nilai_a1'  => 'required',
        'nilai_a2'  => 'required',
        'nilai_a3'  => 'required',
        'nilai_a4'  => 'required',
        'nilai_b1'  => 'required',
        'nilai_b2'  => 'required',
        'nilai_b3'  => 'required',
        'nilai_c1'  => 'required',
        'nilai_c2'  => 'required',
        'nilai_c2_ket'  => 'required',
        'nilai_c1_ket'  => 'required',
        'nilai_b3_ket'  => 'required',
        'nilai_b2_ket'  => 'required',
        'nilai_b1_ket'  => 'required',
        'nilai_a4_ket'  => 'required',
        'nilai_a3_ket'  => 'required',
        'nilai_a2_ket'  => 'required',
        'nilai_a1_ket'  => 'required',
        'jumlah'  => 'required',
    ];

    public function mount() {
        $this->santris = Santri::get(['id','nama']);
    }

    public function hitung(){
        dd($this->coupon);
        $this->fill(['jumlah' => '12333', 'rata' => 'secret']);
    }

    public function store(){
        $this->validate();
        Rapor::create([           
            'santri_id' => $this->santri_id,
            'musyrif' => $this->musyrif,
            'tanggal' => $this->tanggal,
            'jumlahhafalan' => $this->jumlahhafalan,
            'sektor' => $this->sektor,
            'semester' => $this->semester,
            'nilai_a1' => $this->nilai_a1,
            'nilai_a2' => $this->nilai_a2,
            'nilai_a3' => $this->nilai_a3,
            'nilai_a4' => $this->nilai_a4,
            'nilai_b1' => $this->nilai_b1,
            'nilai_b2' => $this->nilai_b2,
            'nilai_b3' => $this->nilai_b3,
            'nilai_c1' => $this->nilai_c1,
            'nilai_c2' => $this->nilai_c2,
            'nilai_c2_ket' => $this->nilai_c2_ket,
            'nilai_c1_ket' => $this->nilai_c1_ket,
            'nilai_b3_ket' => $this->nilai_b3_ket,
            'nilai_b2_ket' => $this->nilai_b2_ket,
            'nilai_b1_ket' => $this->nilai_b1_ket,
            'nilai_a4_ket' => $this->nilai_a4_ket,
            'nilai_a3_ket' => $this->nilai_a3_ket,
            'nilai_a2_ket' => $this->nilai_a2_ket,
            'nilai_a1_ket' => $this->nilai_a1_ket,
            'jumlah' => $this->jumlah,
        ]);      

        return redirect(route('rapor'))->with('status','Data rapor santri berhasil disimpan.');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.rapor.tambah');
    }
}
