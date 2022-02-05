<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{   
    public function mount(){
        if(!Auth::check()){
            return redirect(route("index"));
        }
    }
    
    public function logout(){
        Auth::logout();
        return redirect(route("index"));
    }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
