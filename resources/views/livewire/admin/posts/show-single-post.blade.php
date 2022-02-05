    <div class="flex flex-col w-full p-6" >
        <div x-data="{ open : false}">     
            <button class="absolute ml-2 text-2xl text-red-500" @click=" open = true">
                <i class="fas fa-trash"></i>
            </button>
            <img class="w-full hover:grow hover:shadow-lg"  src="{{ asset('storage/'.$post->image) }}" >
            <div class="flex items-center justify-between pt-3">
                <p class="">{{$post->name}}</p>
                <p>by: {{$post->user->full_name}}</p>
            </div>
            <p class="pt-1 text-gray-900">${{$post->price}}</p>
            <div class="p-2 text-white bg-red-500 rounded-lg" x-show="open">
                <p class="text-white">you want delete this post?</p>
                <button class="px-4 py-1 text-red-500 bg-white rounded-lg" wire:click='delete({{$post->id}})'>yes</button>
                    <button class="px-4 py-1 bg-gray-500 rounded-lg" @click=" open = false">no</button>
            </div>
        </div>
            
           
    </div>
