<div>
    <div class="w-8/12 pb-10 mx-auto">
        <form wire:submit.prevent='submit'>
            <div>
                <div class="text-sm font-bold tracking-wide text-gray-700">Full Name</div>
                <input wire:model.lazy="form.name" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="name">
                @error("form.name")  <p class="text-red-500">{{$message}}</p>  @enderror
            </div>
           
           
            <div class="mt-8">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-bold tracking-wide text-gray-700">
                       price
                    </div>
                </div>
                <input wire:model.lazy="form.price" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500"  placeholder="00.0">
                 @error("form.price")  <p class="text-red-500">{{$message}}</p>  @enderror
    
            </div>
            <div class="mt-8">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-bold tracking-wide text-gray-700">
                      image
                    </div>
                </div>
                <input id="image" wire:change='$emit("fileChoose")' class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="file" >
                     @error("form.image")  <p class="text-red-500">{{$message}}</p>  @enderror
    
            </div>
           
    
            
           
            <div class="mt-10">
                <button class="w-full p-1 font-semibold tracking-wide text-gray-100 bg-indigo-500 rounded-full shadow-lg font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600">
                    add post
                </button>
            </div>
        </form>
    </div>

    <script>
        window.livewire.on("fileChoose",()=>{
            let fileImage=document.getElementById("image");
            let file=fileImage.files[0];
            
            let fileReader=new FileReader();
            
            fileReader.onload=()=>{
                window.livewire.emit("fileUpload",fileReader.result);
            }
            fileReader.readAsDataURL(file);
        });
    </script>
</div>
