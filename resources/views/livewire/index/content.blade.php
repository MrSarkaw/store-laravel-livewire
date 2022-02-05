<div>
    <section class="py-8 bg-white">

        <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

            <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                    <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline " href="#">
				Store
			</a>

              </div>
            </nav>

            @foreach($posts as $post)
            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="{{route("detail",["id"=>$post->id])}}">
                    <img class="hover:grow hover:shadow-lg"  src="{{ asset('storage/'.$post->image) }}"> 
                </a>
                    <div class="flex items-center justify-between pt-3">
                        <p class="">{{$post->name}}</p>
                        @auth
                            @livewire("user.add-favorite",["id"=>$post->id])
                        @endauth
                    </div>
                    <p class="pt-1 text-gray-900">${{$post->price}}</p>
               
            </div>
            @endforeach
            {{$posts->links()}}
          

            </div>

    </section>
</div>
