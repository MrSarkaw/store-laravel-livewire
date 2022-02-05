<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPost extends Component
{

    use WithFileUploads;


    public $form=[
        "name"=>'',
        "price"=>'',
        "image"=>'',
        "user_id"=>''
    ];

    public function mount(){
        $this->form["user_id"]=Auth::id();
    }


    protected $listeners=["fileUpload"=>"getFile"];
    public function getFile($file){
       $this->form["image"]=$file;
    }

    public function submit(){
        $message=[
            "form.name.required"=>"please write  name of product",
            "form.price.required"=>"please write price",
            "form.image.required"=>"please choose image",
        ];

        $this->validate([
            "form.name"=>"required|max:25",
            "form.price"=>"required",
            "form.image"=>'required',
        ],$message);

        $nameImage=time()."image.jpg";
        $img=\Image::make($this->form["image"])->encode("jpg");
        Storage::disk("public")->put($nameImage,$img);
        $this->form["image"]=$nameImage;


        posts::create($this->form);
        
        $this->form=[
            "name"=>'',
            "price"=>'',
            "image"=>'',
            "user_id"=>Auth::id()
        ];

        $this->emit('refreshShowPost');
        
    }


    

    public function render()
    {
        return view('livewire.admin.posts.add-post');
    }
}
