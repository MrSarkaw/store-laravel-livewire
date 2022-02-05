<?php

namespace App\Http\Livewire\User;

use App\Models\favorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowUserFavorite extends Component
{
    public $posts;


    public function render()
    {
        $this->posts=favorite::with("post")->latest()->where("user_id",Auth::id())->get();


        return view('livewire.user.show-user-favorite')->extends("layouts.app")->section("content");
    }
}
