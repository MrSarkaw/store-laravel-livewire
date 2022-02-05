<div class="w-full card">
    <div x-data="{showMessage:false}">
        <div class="md:mt-20 sm:mt-0 card-header">
            <div class="flex justify-between">     
                <button class="px-4 py-1 text-white bg-red-500 rounded-lg text-md md:text-xs focus:outline-none"
                    @click="showMessage=true"><i class="fas fa-trash"></i> delete
                </button>
                <a class="px-4 py-1 text-white bg-blue-500 rounded-lg text-md md:text-xs focus:outline-none"
                    href="{{route("admin.users")}}"><i class="fas fa-trash"></i> back to user
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

        <div class="w-10/12 p-2 mx-auto ">
            <form wire:submit.prevent='update'>
                <div>
                    <div class="text-sm font-bold tracking-wide text-gray-700">Full Name</div>
                    <input wire:model.lazy="formRegister.full_name" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="Full name">
                    @error("formRegister.full_name")  <p class="text-red-500">{{$message}}</p>  @enderror
                </div>
                <div>
                    <div class="mt-8 text-sm font-bold tracking-wide text-gray-700">Email Address</div>
                    <input wire:model.lazy="formRegister.email" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" placeholder="example@gmail.com">
                    @error("formRegister.email")  <p class="text-red-500">{{$message}}</p>  @enderror
        
                </div>
                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-bold tracking-wide text-gray-700">
                            Password
                        </div>
                    </div>
                    <input wire:model.lazy="formRegister.password" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Enter your password">
                    @error("formRegister.password")  <p class="text-red-500">{{$message}}</p>  @enderror
                </div>
                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-bold tracking-wide text-gray-700">
                            password confirmation
                        </div>
                    </div>
                    <input wire:model.lazy="formRegister.password_confirmation" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Repeat your password">
                </div>
                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-bold tracking-wide text-gray-700">
                            Tell Number
                        </div>
                    </div>
                    <input wire:model.lazy="formRegister.tell_number" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="number" placeholder="07** *** ****">
                     @error("formRegister.tell_number")  <p class="text-red-500">{{$message}}</p>  @enderror
        
                </div>
                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-bold tracking-wide text-gray-700">
                          Location
                        </div>
                    </div>
                    <input wire:model.lazy='formRegister.location' class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" placeholder="شار-شەقام">
                         @error("formRegister.location")  <p class="text-red-500">{{$message}}</p>  @enderror
        
                </div>
                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-bold tracking-wide text-gray-700">
                          level
                        </div>
                    </div>
                    <select  wire:model.lazy='formRegister.isAdmin' id="" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500">
                            <option value=""></option>
                            <option value="0">user</option>
                            <option value="1">admin</option>
                    </select>
                         @error("formRegister.isAdmin")  <p class="text-red-500">{{$message}}</p>  @enderror
        
                </div>
        
        
                
               
                <div class="mt-10">
                    <button class="w-full p-1 font-semibold tracking-wide text-gray-100 bg-indigo-500 rounded-full shadow-lg font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600">
                        update user
                    </button>
                </div>
            </form>
        </div>

</div>
