<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    
    public $formRegister=[];
    public $user;

    public function mount(){
        $this->user=Auth::user();

        $this->formRegister=[
            "full_name"=>$this->user->full_name,
            "email"=>$this->user->email,
            "password"=>'',
            "password_confirmation"=>'',
            "location"=>$this->user->location,
            "tell_number"=>$this->user->tell_number,
        ];
    }

    public function update(){
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
            "formRegister.email"=>"required|max:50|email|unique:users,email,".$this->user->id,
            "formRegister.password"=>"nullable|confirmed|max:50",
            "formRegister.location"=>"required|max:100",
            "formRegister.tell_number"=>"required|digits:11",
        ],$message);

       
        if($this->formRegister['password']==''){
            $this->user->update([
                "full_name"=>$this->formRegister['full_name'],
                "email"=>$this->formRegister['email'],
                "location"=>$this->formRegister['location'],
                "tell_number"=>$this->formRegister['tell_number'],
            ]);
        }else{
            $this->user->update($this->formRegister);
        }
        
        $this->emit('refreshShowUser');
        
        return redirect(route("user.index"));
    }


    public function delete(){
        $this->user->delete();
        

        return redirect(route("admin.users"));
    }
    public function render()
    {

        return view('livewire.user.edit')->extends("layouts.app")->section("content");
    }
}
