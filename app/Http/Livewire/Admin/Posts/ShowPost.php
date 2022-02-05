<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\posts;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPost extends Component
{
    use WithPagination;
    protected $listeners=["refreshShowPost"=>"render"];


    public function render()
    {
        return view('livewire.admin.posts.show-post',
            ["posts"=>posts::latest()->paginate(25)]
        );
    }
}
