<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public function mount(){
        if(Auth::check()){
            return redirect(route("index"));
        }
    }
    
    public $formRegister=[
        "full_name"=>'',
        "email"=>'',
        "password"=>'',
        "password_confirmation"=>'',
        "location"=>'',
        "tell_number"=>'',
        "isAdmin"=>0
    ];

    public function submit(){
        $message=[
            "formRegister.full_name.required"=>"please write full name",
            "formRegister.email.required"=>"please write email",
            "formRegister.password.required"=>"please write password",
            "formRegister.location.required"=>"please write your location",
            "formRegister.tell_number.required"=>"please write your phone number",
            "formRegister.password.confirmed"=>"password does not match",
        ];

        $this->validate([
            "formRegister.full_name"=>"required|max:25",
            "formRegister.email"=>"required|unique:users,email|email|max:50",
            "formRegister.password"=>"required|confirmed|max:50",
            "formRegister.location"=>"required|max:100",
            "formRegister.tell_number"=>"required|digits:11",
            "formRegister.isAdmin"=>"in:0"
        ],$message);

       

        User::create($this->formRegister);
        Auth::attempt($this->formRegister);
        return redirect(route("index"));
        
    }
    public function render()
    {

        return view('livewire.auth.register')->extends("layouts.app")->section("content");
    }
}
