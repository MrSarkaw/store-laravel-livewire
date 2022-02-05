<?php

namespace App\Http\Livewire\Admin\UserSection;

use App\Models\User;
use Livewire\Component;

class Edituser extends Component
{
    public $user;
    public $formRegister=[];

    public function mount($id){
        $this->user=User::findOrFail($id);

        $this->formRegister=[
            "full_name"=>$this->user->full_name,
            "email"=>$this->user->email,
            "password"=>'',
            "password_confirmation"=>'',
            "location"=>$this->user->location,
            "tell_number"=>$this->user->tell_number,
            "isAdmin"=>$this->user->isAdmin
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
            "formRegister.isAdmin"=>"required"
        ],$message);

       
        if($this->formRegister['password']==''){
            $this->user->update([
                "full_name"=>$this->formRegister['full_name'],
                "email"=>$this->formRegister['email'],
                "location"=>$this->formRegister['location'],
                "tell_number"=>$this->formRegister['tell_number'],
                "isAdmin"=>$this->formRegister['isAdmin']
            ]);
        }else{
            $this->user->update($this->formRegister);
        }

      
        
       
        
        $this->emit('refreshShowUser');
      

    }


    public function delete(){
        $this->user->delete();
        $this->emit("refreshShowUser");

        return redirect(route("admin.users"));
    }

    public function render()
    {
        return view('livewire.admin.user-section.edituser')->extends("layouts.admin")->section("content");
    }
}
