<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public function mount(){
        if(Auth::check()){
            return redirect(route("index"));
        }
    }
    
    public $form=["email"=>'',"password"=>''];

    
    public function submit(){
        $message=[
            "form.email.required"=>"please write email",
            "form.password.required"=>"please write password",
        ];

        $this->validate([
            "form.email"=>"required|email|max:50",
            "form.password"=>"required|max:50",
        ],$message);

        

        if(Auth::attempt($this->form)){
            if(Auth::user()->IsAdmin()){
                return redirect(route("admin.home"));
            }
            return redirect(route("index"));
        }else{
            session()->flash('invalid', 'email and password are wrong.');
        }
      
        
    }

    public function render()
    {
        return view('livewire.auth.login')->extends("layouts.app")->section("content");
    }
}
