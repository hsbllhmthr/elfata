<?php

namespace App\Http\Livewire\Presensi;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Presensi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;


    public function destroy($id)
    {
        Presensi::find($id)->delete();
        return redirect(route('presensi'))->with('status', 'Data berhasil terhapus');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);

        return view('livewire.presensi.index', [
            'presensis' => Presensi::all()
        ]);
    }
}
