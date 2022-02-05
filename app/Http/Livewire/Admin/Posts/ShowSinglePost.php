<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\posts;
use Livewire\Component;

class ShowSinglePost extends Component
{
    public $post;

    public function mount($id){
        $this->post=posts::with("user")->findOrFail($id);
    }

    
    public function delete($id){
        posts::findOrFail($id)->delete();
        $this->emit("refreshShowPost");
    }
    
    public function render()
    {
        return view('livewire.admin.posts.show-single-post');
    }
}
