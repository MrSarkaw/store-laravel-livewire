<?php

namespace App\Http\Livewire\Admin;

use App\Models\order;
use App\Models\posts;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{   
    public $sales;
    public $users;
    public $product;
    public function render()
    {
        $this->sales=order::all()->count();
        $this->users=User::all()->count();
        $this->product=posts::all()->count();
        return view('livewire.admin.home')->extends("layouts.admin")->section("content");
    }
}
