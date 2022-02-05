<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public $user;

    protected $listeners=["refreshShowUser"=>"render"];

    public function render()
    {
        $this->user=Auth::user();
        return view('livewire.user.home')->extends("layouts.app")->section("content");
    }
}
