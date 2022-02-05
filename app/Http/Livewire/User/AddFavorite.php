<?php

namespace App\Http\Livewire\User;

use App\Models\favorite;
use App\Models\posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddFavorite extends Component
{

    public $checkFav;
    public $postID;
    
    public function mount($id){
        $this->postID=$id;
        $fav=favorite::where("post_id",$id)->where("user_id",Auth::id())->first();

        if($fav){
            $this->checkFav=true;
        }else{
            $this->checkFav=false;
        }
    }


    public function favorite(){

        if(!Auth::check()){
            return redirect(route("index"));
        }
        posts::findOrFail($this->postID);

        $check=favorite::where("post_id",$this->postID)->where("user_id",Auth::id())->first();

        if($check){
            $check->delete();
        }else{
            favorite::create([
                "user_id"=>Auth::id(),
                "post_id"=>$this->postID
            ]);
        }
        $this->mount($this->postID);

        
        $this->emit("newFavorite");

    }

    


    public function render()
    {
        return view('livewire.user.add-favorite');
    }
}
