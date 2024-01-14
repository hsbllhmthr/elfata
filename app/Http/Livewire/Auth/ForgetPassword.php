<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Notifications\ResetPassword;
use App\Models\User;
use Illuminate\Notifications\Notifiable;

class ForgetPassword extends Component
{
    use Notifiable;

    public $username='';
    
    protected $rules = [
        'username' => 'required|username',
    ];

    public function render()
    {
        return view('livewire.auth.forget-password');
    }


    public function routeNotificationForMail() {
        return $this->username;
    }

    public function show(){

        if(env('IS_DEMO')){
            return back()->with('demo', "You are in a demo version, you can't reset the password");
        }
        else{

        $this->validate();

        $user = User::where('username', $this->username)->first();

            if($user){

                $this->notify(new ResetPassword($user->id));

                return back()->with('status', "We have usernameed your password reset link!");

            } else {
                return back()->with('username', "We can't find a user with that username address.");
            }
    }
}
}
