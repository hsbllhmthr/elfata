<?php

namespace App\Http\Livewire\Hafalan;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Request;
use App\Models\Hafalan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public $tanggal='';
    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $request;

    protected $queryString = ['sortField', 'sortDirection',];
    protected $paginationTheme = 'bootstrap';  

    public function sortBy($field){
        if($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function destroy($id){      
        
        Hafalan::find($id)->delete();
        return redirect(route('hafalan'))->with('status', 'Data berhasil terhapus');
    }    

    public function render()
    {
         $this->authorize('manage-users', User::class);

        return view('livewire.hafalan.index',[
            'hafalans' => Hafalan::all()
        ]);
    }

    
}
