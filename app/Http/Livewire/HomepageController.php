<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Galeri;

class HomepageController extends Component
{

    public function index()
    {
        return view('homepage', [
            'galeris' => Galeri::all()
        ]);
    }
}
