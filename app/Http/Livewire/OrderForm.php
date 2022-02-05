<?php

namespace App\Http\Livewire;

use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Telegram\Bot\Laravel\Facades\Telegram;

class OrderForm extends Component
{   
    public $formOrder;
    public $colors;
    public $sizes;


    public function mount($id){
        $this->formOrder=[
            "post_id"=>$id,
            "user_id"=>Auth::id(),
            "color"=>'',
            "size"=>'',
        ];

        $this->colors=["white","black","red","blue","green","gray","yellow","pink"];
        $this->sizes=["XS","S","M","L","XL","XXL"];
    }

    public function order(){

        $message=[
            "formOrder.size.required"=>"please choose size",
            "formOrder.color.required"=>"please choose color",
         
        ];

        $this->validate([
            "formOrder.size"=>"required|max:25",
            "formOrder.color"=>"required|max:25",
        ],$message);


        if(in_array($this->formOrder["color"],$this->colors)){
            if(in_array($this->formOrder["size"],$this->sizes)){

                order::create($this->formOrder);
                Telegram::sendMessage([
                    'chat_id' => "-1001493988031",
                    'text' => "new order!"
                ]);

              session()->flash("order");
            }
        }

        
    }
    public function render()
    {
        return view('livewire.order-form');
    }
}
