<div>
    <div>
        <section class="py-8 bg-white">
    
            <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">
    
                <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                    <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">
    
                        <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline " href="#">
                    orders
                </a>
    
                  </div>
                </nav>
                @if(count($posts)==0)
                    <div class="w-full p-2 mx-auto text-center text-white bg-purple-500 rounded-lg md:w-6/12">
                        هیچ كاڵایەكت نەكڕیەوە
                    </div>
                @endif
                @foreach($posts as $post)
                <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                    <a href="{{route("detail",["id"=>$post->post->id])}}">
                        <img class="hover:grow hover:shadow-lg"  src="{{ asset('storage/'.$post->post->image) }}" >
                    </a>
                  
                    <div class="flex justify-between">         
                        <p class="">size: {{$post->size}}</p>
                        <p class="pt-1 text-gray-900">color: {{$post->color}}</p>
                    </div>
                
                    <div class="items-center justify-between ">
                        <button class="w-full px-4 py-1 pt-2 text-white bg-red-400 rounded-lg" wire:click='cancel({{$post->post_id}})'>cancel order</button>
                    </div>

                    <div class="flex justify-between mt-2">         
                        <p class="">{{$post->post->name}}</p>
                        <p class="pt-1 text-gray-900">${{$post->post->price}}</p>
                    </div>
                   
                </div>
                @endforeach
              
    
                </div>
    
        </section>
    </div>
    
</div>
