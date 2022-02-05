<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\order as ModelsOrder;
use Livewire\Component;

class Order extends Component
{
    public function delete($id){
        ModelsOrder::findOrFail($id)->delete();
        $this->render();
    }
    
    public function render()
    {
        return view('livewire.admin.order.order',
            [
                "orders"=>ModelsOrder::paginate(30)
            ]
        )->extends("layouts.admin")->section("content");
    }
}
