<?php

namespace App\Http\Livewire\Admin\UserSection;

use App\Models\User;
use Livewire\Component;

class Adduser extends Component
{

       
    public $formRegister=[
        "full_name"=>'',
        "email"=>'',
        "password"=>'',
        "password_confirmation"=>'',
        "location"=>'',
        "tell_number"=>'',
        "isAdmin"=>''
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
            "formRegister.isAdmin"=>"required"
        ],$message);

       

        User::create($this->formRegister);
        
        $this->formRegister=[
            "full_name"=>'',
            "email"=>'',
            "password"=>'',
            "password_confirmation"=>'',
            "location"=>'',
            "tell_number"=>'',
            "isAdmin"=>''
        ];
        
        $this->emit('refreshShowUser');
        
    }


    public function render()
    {
        return view('livewire.admin.user-section.adduser');
    }
}
