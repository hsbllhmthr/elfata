<?php

namespace App\Http\Livewire\Santri;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{

    use AuthorizesRequests;


    public function destroy($id)
    {

        if (!Santri::find($id)->absensi->isEmpty()) {
            return redirect(route('santri'))->with('error', 'Santri ini masih ada di data absensi. Silahkan hapus absensi santri ini terlebih dahulu.');
        }
        if (!Santri::find($id)->hafalan->isEmpty()) {
            return redirect(route('santri'))->with('error', 'Santri ini masih ada di data setoran hafalan. Silahkan hapus setoran hafalan santri ini terlebih dahulu.');
        }
        if (!Santri::find($id)->pembayaran->isEmpty()) {
            return redirect(route('santri'))->with('error', 'Santri ini masih ada di data pembayaran. Silahkan hapus pembayaran santri ini terlebih dahulu.');
        }
        if (!Santri::find($id)->rapor->isEmpty()) {
            return redirect(route('santri'))->with('error', 'Santri ini masih ada di data rapor. Silahkan hapus rapor santri ini terlebih dahulu.');
        }


        Santri::find($id)->delete();
        return redirect(route('santri'))->with('status', 'Data berhasil terhapus');
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);

        return view('livewire.santri.index', [
            'santris' => Santri::all()
        ]);
    }
}
