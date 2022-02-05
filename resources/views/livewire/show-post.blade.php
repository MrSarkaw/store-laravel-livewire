<div>
    <div class="flex flex-wrap w-full mt-10 ">
        <div class="flex flex-col p-6 md:w-4/12 ">
            <a href="{{route("detail",["id"=>$post->id])}}">
                <img class="w-full hover:grow hover:shadow-lg" src="/storage/{{$post->image}}">
            </a>
                <div class="flex items-center justify-between pt-3">
                    <p class="">{{$post->name}}</p>
                    @auth
                        @livewire("user.add-favorite",["id"=>$post->id])
                    @endauth
                </div>
                <p class="pt-1 text-gray-900">${{$post->price}}</p>
           
        </div>

        <div class="text-center md:w-8/12">
            <p class="text-lg">فۆڕمی داواكردن</p>
            <p class="mt-4 text-xs text-yellow-800">تكایە دڵنیابەرەوە لە زانیاری كەسیت، ئێمە لە ڕیگای زانیاریەكانتەوە بەتۆ ئەگەین</p>
            @livewire("order-form",["id"=>$post->id])
        </div>
    </div>
    
</div>
