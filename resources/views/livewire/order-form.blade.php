<div>
    <div class="w-full mx-auto mt-8 md:w-6/12">
        <div class="flex items-center justify-between">
            <div class="font-bold tracking-wide text-gray-700">
                size
            </div>
        </div>
        <select wire:model.lazy='formOrder.size' id=""
            class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500">
            <option value=""></option>
            @foreach ($sizes as $val)
                <option value="{{ $val }}">{{ $val }}</option>
            @endforeach

        </select>
        @error('formOrder.size') <p class="text-red-500">{{ $message }}</p> @enderror

    </div>
    <div class="w-full mx-auto mt-8 md:w-6/12">
        <div class="flex items-center justify-between">
            <div class="font-bold tracking-wide text-gray-700">
                color
            </div>
        </div>
        <select wire:model.lazy='formOrder.color' id=""
            class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500">
            <option value=""></option>
            @foreach ($colors as $val)
                <option value="{{ $val }}">{{ $val }}</option>
            @endforeach

        </select>
        @error('formOrder.color') <p class="text-red-500">{{ $message }}</p> @enderror

    </div>

    <div class="mt-10" x-data="{ showOrder:false }">
        <button @click=" showOrder=true " class="w-full p-2 text-lg font-semibold tracking-wide text-gray-100 bg-indigo-500 rounded-full shadow-lg md:w-6/12 font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600">
            <i class="fas fa-shopping-cart"></i> order
        </button> 
        <div x-show=" showOrder " class="p-2 mx-auto mt-5 bg-indigo-500 rounded-lg md:w-6/12">
           <p class="text-white">دڵنیای لە كڕینی كاڵا؟</p>
           <div class="flex justify-between mt-3">
               <button class="px-6 py-1 text-indigo-500 bg-white rounded-lg" wire:click="order" @click=" showOrder=false ">yes</button>
               <button class="px-4 py-1 text-black bg-white rounded-lg" @click=" showOrder=false ">no</button>
           </div>
        </div>
    </div>

    @if(session()->has("order"))
        <div  class="p-2 mx-auto mt-5 bg-red-500 rounded-lg line-10 md:w-6/12">
            <p class="text-white">سوپاس بۆ هەڵبژاردنی ئێمە بە زوترین كات پەیوەندیت پێوە ئەكرێ كاڵاكە ئەگەیەنرێتە دەستت</p>
         </div>
    @endif
    
    

</div>
