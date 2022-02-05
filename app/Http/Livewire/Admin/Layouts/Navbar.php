<?php

namespace App\Http\Livewire\Admin\Layouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public function logout(){
        Auth::logout();
        return redirect(route("index"));
    }
    
    public function render()
    {
        return view('livewire.admin.layouts.navbar');
    }
}
