<?php

namespace App\Http\Livewire\Index;

use App\Models\posts;
use Livewire\Component;

class Carousel extends Component
{
    public $posts;
    public function render()
    {
        if(posts::all()->count()<8){
            $this->posts=posts::all()->random(posts::all()->count());
        }else{
            $this->posts=posts::all()->random(8);
        }
        return view('livewire.index.carousel');
    }
}
