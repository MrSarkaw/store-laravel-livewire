
<div>
    <div class="items-center justify-center lg:flex">
        <div class="lg:w-1/2 xl:max-w-screen-sm">
           
            <div class="px-12 mt-10 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                @if(session()->has("invalid"))
                    <div class="p-2 text-center text-white bg-red-500 rounded-lg">
                        {{session()->get("invalid")}}
                    </div>
                    @endif
                <div class="mt-12">
                    
                    <form wire:submit.prevent='submit'>
                        <div>
                            <div class="text-sm font-bold tracking-wide text-gray-700">Email Address</div>
                            <input wire:model.lazy="form.email" class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" placeholder="example@gmail.com">
                            @error("form.email")  <p class="text-red-500">{{$message}}</p> @enderror
                        </div>
                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="text-sm font-bold tracking-wide text-gray-700">
                                    Password
                                </div>
                            </div>
                            <input wire:model.lazy='form.password' class="w-full py-2 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Enter your password">
                            @error("form.password") <p class="text-red-500">{{$message}}</p>  @enderror
                            
                        </div>
                        <div class="mt-10">
                            <button wire:click="submit" class="w-full p-4 font-semibold tracking-wide text-gray-100 bg-indigo-500 rounded-full shadow-lg font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600">
                                Log In
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-semibold text-center text-gray-700 font-display">
                        Don't have an account ? <a href={{route("register")}} class="text-indigo-600 cursor-pointer hover:text-indigo-800">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
