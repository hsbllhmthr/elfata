<?php

namespace App\Http\Livewire\Galeri;

use App\Models\Galeri;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public $judul='';
    public $foto;  

    protected $rules =[
        'judul' => 'required|min:3|unique:galeris,judul',
        'foto' => 'required|mimes:jpg,jpeg,png|max:4096',
    ];

    public function mount(){

    }

    public function store(){

        $this->validate();

        $item = Galeri::create([
            'judul' => $this->judul,
            'foto' => $this->foto->store('fotos', 'public'),
        ]);       

        return redirect(route('galeri'))->with('status','Galeri foto berhasil ditambah.');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);        
        return view('livewire.galeri.tambah');
    }
}
