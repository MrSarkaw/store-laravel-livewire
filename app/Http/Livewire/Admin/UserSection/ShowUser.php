<?php

namespace App\Http\Livewire\Admin\UserSection;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ShowUser extends Component
{
    use WithPagination;



    protected $listeners = ['refreshShowUser' => 'render'];


  
    public function render()
    {
        return view('livewire.admin.user-section.show-user',
            [
                'users'=>User::paginate(25)
            ]
        );
    }
}
