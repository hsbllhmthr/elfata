<?php

namespace App\Http\Livewire\Santri;

use App\Models\Role;
use Livewire\Component;
use App\Models\User;
use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Tambah extends Component
{

    use AuthorizesRequests;

    public $cabang = '';
    public $sektor = '';
    public $nis = '';
    public $nama = '';
    public $tempatlahir = '';
    public $tgllahir = '';
    public $jk = '';
    public $saudara = '';
    public $anakke = '';
    public $alamat = '';
    public $umur = '';
    public $nohp = '';
    public $asalsekolah = '';
    public $tglmasuk = '';
    public $namaayah = '';
    public $namaibu = '';
    public $kerjaayah = '';
    public $kerjaibu = '';
    public $pendayah = '';
    public $pendibu = '';
    public $password = '';
    public $role_id = '';

    protected $rules = [
        'cabang' => 'required',
        'sektor' => 'required',
        'nis' => 'required|unique:santris,nis',
        'nama' => 'required',
        'tempatlahir' => 'required',
        'tgllahir' => 'required',
        'jk' => 'required',
        'saudara' => 'required',
        'anakke' => 'required',
        'alamat' => 'required',
        'umur' => 'required',
        'nohp' => 'required',
        'asalsekolah' => 'required',
        'tglmasuk' => 'required',
        'namaayah' => 'required',
        'namaibu' => 'required',
        'kerjaayah' => 'required',
        'kerjaibu' => 'required',
        'pendayah' => 'required',
        'pendibu' => 'required',
        'password' => 'required|min:6',
    ];

    public function mount()
    {

        $this->roles = Role::get(['id', 'name']);
    }

    public function store()
    {

        $this->validate();

        Santri::create([
            'cabang' => $this->cabang,
            'sektor' => $this->sektor,
            'nis' => $this->nis,
            'nama' => $this->nama,
            'tempatlahir' => $this->tempatlahir,
            'tgllahir' => $this->tgllahir,
            'jk' => $this->jk,
            'saudara' => $this->saudara,
            'anakke' => $this->anakke,
            'alamat' => $this->alamat,
            'umur' => $this->umur,
            'nohp' => $this->nohp,
            'asalsekolah' => $this->asalsekolah,
            'tglmasuk' => $this->tglmasuk,
            'namaayah' => $this->namaayah,
            'namaibu' => $this->namaibu,
            'kerjaayah' => $this->kerjaayah,
            'kerjaibu' => $this->kerjaibu,
            'pendayah' => $this->pendayah,
            'pendibu' => $this->pendibu,
        ]);

        User::create([
            'name' => $this->nama,
            'username' => $this->nis,
            'role_id' => 2,
            'password' => $this->password,
            'picture' => 'profile/avatar.jpg',
        ]);

        return redirect(route('santri'))->with('status', 'Data santri berhasil disimpan.');
    }


    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.santri.tambah');
    }
}
