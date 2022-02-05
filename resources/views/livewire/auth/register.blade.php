
 <div>
 
 
    <div class="items-center justify-center lg:flex">
        <div class="lg:w-1/2 xl:max-w-screen-sm">
            <div class="px-12 mt-10 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                <div class="mt-12">
                    <form wire:submit.prevent='submit'>
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


                        
                       
                        <div class="mt-10">
                            <button class="w-full p-4 font-semibold tracking-wide text-gray-100 bg-indigo-500 rounded-full shadow-lg font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600">
                                Sign Up
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-semibold text-center text-gray-700 font-display">
                        have an account ? <a href="{{route("login")}}" class="text-indigo-600 cursor-pointer hover:text-indigo-800">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
</div>

