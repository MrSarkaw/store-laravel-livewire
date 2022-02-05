<?php

namespace App\Http\Livewire\User;

use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowOrder extends Component
{
    public $posts=[];
    public function mount(){
        $this->posts=order::with("user","post")->where("user_id",Auth::id())->latest()->get();
    }

    public function cancel($id){
        $order=order::where("user_id",Auth::id())->where("post_id",$id)->first();
        if($order){
            $order->delete();
        }

        $this->mount();
        $this->render();
    }

    public function render()
    {
        return view('livewire.user.show-order')->extends("layouts.app")->section("content");;
    }
}
