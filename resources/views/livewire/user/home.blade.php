<div>
    <div class="flex items-center justify-center w-full h-screen">

        <div class="max-w-xs">
            <div class="py-3 bg-white rounded-lg shadow-xl">
                <div class="p-2 photo-wrapper">
                    <img class="w-32 h-32 mx-auto rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Missing_avatar.svg" alt="John Doe">
                </div>
                <div class="p-2">
                    <h3 class="text-xl font-medium leading-8 text-center text-gray-900">{{$user->full_name}}</h3>
                    <table class="my-3 ">
                        <tbody><tr>
                            <td class="px-2 py-2 font-semibold text-gray-500">Address</td>
                            <td class="px-2 py-2">{{$user->location}}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 font-semibold text-gray-500">Phone</td>
                            <td class="px-2 py-2">{{$user->tell_number}}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 font-semibold text-gray-500">Email</td>
                            <td class="px-2 py-2">{{$user->email}}</td>
                        </tr>
                    </tbody></table>
        
                    <div class="flex justify-between my-3 text-center">
                        <a class="font-medium text-indigo-500 hover:underline hover:text-indigo-600" href="{{route("user.edit")}}">edit <i class="fas fa-edit"></i></a>
                        <a class="font-medium text-indigo-500 hover:underline hover:text-indigo-600" href="{{route("user.showOrder")}}">orders <i class="fas fa-shopping-cart"></i></a>
                    </div>
        
                </div>
            </div>
        </div>
        
        </div>
</div>
