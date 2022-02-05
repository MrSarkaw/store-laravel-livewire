<div class="block"> 
   

    <div class="w-full border-t border-b swiper-container" id="swiper-container2" >
        <div class=" swiper-wrapper">
            @foreach($posts as $post)

            <div class="w-full p-2 mx-auto swiper-slide">
                <a  href="{{route("detail",["id"=>$post->id])}}">
                    <img class="w-full mx-auto rounded-lg md:w-7/12 hover:grow hover:shadow-lg" src="/storage/{{$post->image}}">
                    <div class="flex justify-between w-full pt-3 mx-auto md:w-7/12">
                        <p>{{$post->name}}</p>
                        <p >
                            ${{$post->price}}
                        </p>
                    </div>
                        
                </a>
            </div>
            
            @endforeach
         
        </div>
    </div>
    <!-- Swiper JS -->
    

    <!-- Initialize Swiper -->
  

</div>
