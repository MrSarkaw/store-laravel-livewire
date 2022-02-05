<div>
    
    
    <div class="flex flex-wrap items-center justify-center w-full h-screen">
        <div class="w-full">     
            <div class="w-full mx-auto md:w-6/12 md:mt-20 sm:mt-0 card-header" x-data="{ showMessage : false }">
                <div class="flex justify-between">     
                    <button class="px-4 pt-1 text-white bg-red-500 rounded-lg text-md md:text-xs focus:outline-none"
                        @click="showMessage=true"><i class="fas fa-trash"></i> delete
                    </button>
                    <a class="px-4 pt-1 text-white bg-blue-500 rounded-lg text-md md:text-xs focus:outline-none"
                        href="{{route("user.index")}}"><i class="fas fa-trash"></i> back to user
                      </a>
                </div>
        
                <div class="mt-6" x-show="showMessage">
                    <p class="p-2 text-white bg-red-500 rounded-lg">
                        do you want delete this account?
                        <button class="px-4 py-1 text-red-500 bg-white rounded-lg" wire:click='delete'>yes</button>
                        <button class="px-4 py-1 text-white bg-gray-500 rounded-lg" @click="showMessage=false">no</button>
                    </p>
                </div>
          
            </div>
            
        </div>
        <div class="max-w-xs">
            <div class="py-3 bg-white rounded-lg shadow-xl">
                <div class="p-2 photo-wrapper">
                    <img class="w-32 h-32 mx-auto rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Missing_avatar.svg">
                </div>
                <form wire:submit.prevent="update">
                    <div class="p-2">
                        <h3 class="text-xl font-medium leading-8 text-center text-gray-900">
                            <input wire:model.lazy="formRegister.full_name" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" placeholder="Full name">
                            @error("formRegister.full_name")  <p class="text-red-500">{{$message}}</p>  @enderror
                        </h3>
                        <table class="my-3 text-xs">
                            <tbody><tr>
                                <td class="px-2 py-2 font-semibold text-gray-500">Address</td>
                                <td class="px-2 py-2">
                                    <input wire:model.lazy="formRegister.location" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" placeholder="address">
                                    @error("formRegister.location")  <p class="text-red-500">{{$message}}</p>  @enderror
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 font-semibold text-gray-500">Phone</td>
                                <td class="px-2 py-2">
                                    <input wire:model.lazy="formRegister.tell_number" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="tell" placeholder="phone">
                                    @error("formRegister.tell_number")  <p class="text-red-500">{{$message}}</p>  @enderror    
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 font-semibold text-gray-500">Email</td>
                                <td class="px-2 py-2">
                                    <input wire:model.lazy="formRegister.email" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" placeholder="email">
                                    @error("formRegister.email")  <p class="text-red-500">{{$message}}</p>  @enderror    
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 font-semibold text-gray-500">password</td>
                                <td class="px-2 py-2">
                                    <input wire:model.lazy="formRegister.password" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="password">
                                    @error("formRegister.password")  <p class="text-red-500">{{$message}}</p>  @enderror    
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 font-semibold text-gray-500">password confirmation</td>
                                <td class="px-2 py-2">
                                    <input wire:model.lazy="formRegister.password_confirmation" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="password confirmation">
                                    @error("formRegister.password_confirmation")  <p class="text-red-500">{{$message}}</p>  @enderror    
                                </td>
                            </tr>
                        </tbody></table>
            
                        <div class="my-3 text-center">
                            <button class="px-5 py-1 font-medium text-white bg-blue-500 rounded-lg">update</botton>
                        </div>
            
                    </div>
                </form>
            </div>
        </div>
        
        </div>
</div>
