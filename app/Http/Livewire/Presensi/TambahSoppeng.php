<?php

namespace App\Http\Livewire\Presensi;

use App\Models\Santri;
use Livewire\Component;
use App\Models\User;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TambahSoppeng extends Component
{
    use AuthorizesRequests;


    public $santris;
    public $tanggal = '';
    public $ket = '';
    public $cabang = '';
    public $santri_id;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function mount()
    {
        $cabangss = request()->query('cabang');
        $this->santris = Santri::where('cabang', '=', "Soppeng")->get();
    }

    private function resetInputFields()
    {
        $this->tanggal = '';
        $this->santri_id = '';
        $this->ket = '';
        // $this->cabang = '';
    }

    protected $rules = [
        'tanggal' => 'required',
        // 'cabang' => 'required',
        'santri_id.0' => 'required',
        'ket.0' => 'required',
        'santri_id.*' => 'required',
        'ket.*' => 'required',
    ];

    public function store()
    {
        $this->validate();

        foreach ($this->ket as $key => $value) {
            Presensi::create([
                'santri_id' => $this->santri_id[$key],
                'tanggal' => $this->tanggal,
                'ket' => $this->ket[$key],
                'cabang' => "Soppeng",
            ]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        return redirect(route('presensi'))->with('status', 'Data presensi santri berhasil disimpan.');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.presensi.tambah-soppeng');
    }
}
