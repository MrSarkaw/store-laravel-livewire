<?php

namespace App\Http\Livewire\User;

use App\Models\favorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CountFavorite extends Component
{
    public $countFavorite;

    protected $listeners=["newFavorite"=>"render"];

    public function render()
    {
        $this->countFavorite=favorite::where("user_id",Auth::id())->count();
        return view('livewire.user.count-favorite');
    }
}
