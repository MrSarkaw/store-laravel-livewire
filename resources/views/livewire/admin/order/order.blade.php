<div class="w-full p-2 bg-white md:mt-20 card" x-data="{ show:false }">
    <p class="p-2 mb-4 text-lg font-bold text-center text-white bg-red-500 rounded-lg" x-show="show">! كرداری سڕینەوە چالاك كرا</p>
    <div class="pb-10 mx-auto overflow-x-scroll tables"> 
        <table class="w-full text-left table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r">id</th>
                    <th class="px-4 py-2 border-r">full name</th>
                    <th class="px-4 py-2 border-r">tell number</th>
                    <th class="px-4 py-2 border-r">location</th>
                    <th class="px-4 py-2 border-r">t-shirt name</th>
                    <th class="px-4 py-2 border-r">image</th>
                    <th class="px-4 py-2 border-r">price</th>
                    <th class="px-4 py-2 border-r">size</th>
                    <th class="px-4 py-2 border-r">color</th>
                    <th class="px-4 py-2 border-l-0 cursor-pointer " @click=" show= !show "><i class="fas fa-cog"></i></th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($orders as $index=>$order)     
                <tr>                    
                    <td class="px-4 py-2 border border-l-0">{{$index+1}}</td>
                    <td class="px-4 py-2 border border-l-0">{{$order->user->full_name}}</td>
                    <td class="px-4 py-2 border border-l-0">{{$order->user->tell_number}}</td>
                    <td class="px-4 py-2 border border-l-0">{{$order->user->location}}</td>
                    <td class="px-4 py-2 border border-l-0">{{$order->post->name}}</td>
                    <td class="px-4 py-2 border border-l-0">
                        <img src="{{ asset('storage/'.$order->post->image) }}" class="w-full" alt="">
                       
                    </td>
                    <td class="px-4 py-2 border border-l-0">{{$order->post->price}}</td>
                    <td class="px-4 py-2 border border-l-0">{{$order->size}}</td>
                    <td class="px-4 py-2 border border-l-0">{{$order->color}}</td>
                    <td class="px-4 py-2 text-white bg-red-500 border border-l-0 border-r-0" x-show=" show ">
                        <button class="h-48" wire:click='delete({{$order->id}})'>
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{$users->links()}} --}}
    </div>
    

</div>
