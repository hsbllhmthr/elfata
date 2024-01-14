<?php

namespace App\Http\Livewire\Guru;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Guru;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{

    use AuthorizesRequests;
    use WithPagination;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;

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
        
        Guru::find($id)->delete();
        return redirect(route('guru'))->with('status', 'Data berhasil terhapus');
    }

    public function render()
    {
         $this->authorize('manage-users', User::class);

        return view('livewire.guru.index',[
            'gurus' => Guru::all()
        ]);
    }
}
