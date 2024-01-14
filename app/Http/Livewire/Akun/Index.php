<?php

namespace App\Http\Livewire\Akun;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public $old_password;
    public $new_password;
    public $confirmationPassword;
   
    public function passwordUpdate(){

      $this->validate([
          'old_password' => 'required',
          'new_password' => 'required|min:6|same:confirmationPassword',
      ]);

      $hashedPassword = auth()->user()->password;

      if (Hash::check($this->old_password , $hashedPassword)) {
          if (!Hash::check($this->new_password , $hashedPassword))
          {
              $users = User::findorFail(auth()->user()->id);
              $users->password = $this->new_password;
              $users->save();
              return back()->with(['success'=>'Password berhasil diubah.']);
          }
          else{
              return back()->with(['error' =>"Password baru tidak bisa menjadi password lama!"]);
          }
      }
      else{
          return back()->with(['error' =>"Password lama salah"]);
      }
    }

    public function render()
    {
        $this->authorize('manage-users', User::class);
        return view('livewire.akun.index');
    }
}
