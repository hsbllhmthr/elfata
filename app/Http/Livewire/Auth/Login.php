<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public $username = '';
    public $password = '';

    protected $rules = [
        'username' => 'required|username',
        'password' => 'required'

    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function mount()
    {

        // $this->fill(['username' => 'admin', 'password' => 'secret']);
    }

    public function store()
    {
        // $attributes = $this->validate();

        $attributes = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Username dan password salah'
            ]);
        }

        session()->regenerate();

        return redirect('dasbor');
    }
}
