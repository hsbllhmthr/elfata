<?php

namespace App\Http\Livewire\Galeri;

use App\Models\Galeri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubah extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public Galeri $galeri;
    public $foto;

    protected function rules(){
        return[
            'galeri.judul' => 'required|unique:galeris,judul,'.$this->galeri->id,
        ];
    }

    public function mount($id){
        $this->galeri = Galeri::find($id);
    }

    public function update(){

        $this->validate();
        $this->galeri->update();

        if ($this->foto){
            
            $this->validate([
                'foto' => 'mimes:jpg,jpeg,png|max:4096',
            ]);

            $currentPicture = $this->galeri->foto;

            if ($currentPicture !=='fotos/img1.jpg' && $currentPicture !=='fotos/img2.jpg' && $currentPicture !=='fotos/img3.jpg'){
                unlink(storage_path('app/public/'.$currentPicture));
            }
            $this->galeri->update([
                'foto' => $this->foto->store('fotos', 'public')
            ]);
        }
        return redirect(route('galeri'))->with('status','Galeri foto berhasil diubah.');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);        
        return view('livewire.galeri.ubah');
    }
}
