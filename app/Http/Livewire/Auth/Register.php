<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;

class Register extends Component
{

    public $name ='';
    public $username = '';
    public $password = '';
    public $role_id='';
    public $roles;

    protected $rules=[
    'name' => 'required|min:3',
    'username' => 'required|username|unique:users,username',
    'password' => 'required|min:5',
    'role_id' => 'required'
];


    public function store(){

        $attributes = $this->validate();

        $user = User::create($attributes);

        auth()->login($user);
        
        return redirect('laravel-examples/user-profile');
    } 

    public function mount(){

        $this->roles=Role::all();
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
