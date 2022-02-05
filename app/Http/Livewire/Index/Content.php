<?php

namespace App\Http\Livewire\Index;

use App\Models\posts;
use Livewire\Component;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;




    public function render()
    {
        return view('livewire.index.content',
            ["posts"=>posts::latest()->paginate(25)]
        );
    }
}
