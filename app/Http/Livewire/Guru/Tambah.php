<?php

namespace App\Http\Livewire\Guru;

use App\Models\Role;
use Livewire\Component;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Tambah extends Component
{

    use AuthorizesRequests;

    public $stambuk = '';
    public $nama = '';
    public $cabang = '';
    public $sektor = '';
    public $jk = '';
    public $tempatlahir = '';
    public $tgllahir = '';
    public $statusnikah = '';
    public $saudara = '';
    public $anakke = '';
    public $namaayah = '';
    public $namaibu = '';
    public $kerjaayah = '';
    public $kerjaibu = '';
    public $tanggalkontrak = '';
    public $asal = '';
    public $alamattinggal = '';
    public $email = '';
    public $nohp = '';
    public $tk = '';
    public $sd = '';
    public $smp = '';
    public $sma = '';
    public $universitas = '';
    public $jurusan = '';

    protected $rules = [
        'stambuk' => 'required|unique:gurus,stambuk',
        'nama' => 'required',
        'cabang' => 'required',
        'sektor' => 'required',
        'jk' => 'required',
        'tempatlahir' => 'required',
        'tgllahir' => 'required',
        'statusnikah' => 'required',
        'saudara' => 'required',
        'anakke' => 'required',
        'namaayah' => 'required',
        'namaibu' => 'required',
        'kerjaayah' => 'required',
        'kerjaibu' => 'required',
        'tanggalkontrak' => 'required',
        'asal' => 'required',
        'alamattinggal' => 'required',
        'email' => 'required',
        'nohp' => 'required',
        'tk' => 'required',
        'sd' => 'required',
        'smp' => 'required',
        'sma' => 'required',
        'universitas' => 'required',
        'jurusan' => 'required',
    ];

    public function mount()
    {

        $this->roles = Role::get(['id', 'name']);
    }

    public function store()
    {

        $this->validate();

        Guru::create([
            'stambuk' => $this->stambuk,
            'nama' => $this->nama,
            'cabang' => $this->cabang,
            'sektor' => $this->sektor,
            'jk' => $this->jk,
            'tempatlahir' => $this->tempatlahir,
            'tgllahir' => $this->tgllahir,
            'statusnikah' => $this->statusnikah,
            'saudara' => $this->saudara,
            'anakke' => $this->anakke,
            'namaayah' => $this->namaayah,
            'namaibu' => $this->namaibu,
            'kerjaayah' => $this->kerjaayah,
            'kerjaibu' => $this->kerjaibu,
            'tanggalkontrak' => $this->tanggalkontrak,
            'asal' => $this->asal,
            'alamattinggal' => $this->alamattinggal,
            'email' => $this->email,
            'nohp' => $this->nohp,
            'tk' => $this->tk,
            'sd' => $this->sd,
            'smp' => $this->smp,
            'sma' => $this->sma,
            'universitas' => $this->universitas,
            'jurusan' => $this->jurusan,
        ]);

        return redirect(route('guru'))->with('status', 'Data santri berhasil disimpan.');
    }


    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.guru.tambah');
    }
}
