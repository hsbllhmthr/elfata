<?php

namespace App\Http\Livewire\Galeri;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Galeri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public function destroy($id){      
        
        Galeri::find($id)->delete();
        return redirect(route('galeri'))->with('status', 'Data berhasil terhapus');
    }    

    public function render()
    {
        
        return view('livewire.galeri.index',[
            'galeris' => Galeri::all()
        ]);
    }

    
}
