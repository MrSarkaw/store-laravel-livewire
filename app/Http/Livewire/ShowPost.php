<?php

namespace App\Http\Livewire;

use App\Models\posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;
    public function mount($id){
        if(!Auth::check()){
            return redirect(route("login"));
        }
        $this->post=posts::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-post')->extends("layouts.app")->section("content");
    }
}
