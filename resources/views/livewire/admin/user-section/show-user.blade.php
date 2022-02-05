<div class="mx-auto overflow-x-scroll tables"> 
    <table class="w-full text-left table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-r">id</th>
                <th class="px-4 py-2 border-r">full name</th>
                <th class="px-4 py-2 border-r">email</th>
                <th class="px-4 py-2 border-r">tell number</th>
                <th class="px-4 py-2 border-r">location</th>
                <th class="px-4 py-2 border-r">isAdmin</th>
                <th class="px-4 py-2 border-r"><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
            @foreach ($users as $index=>$user)     
            <tr>                    
                <td class="px-4 py-2 border border-l-0">{{$index+1}}</td>
                <td class="px-4 py-2 border border-l-0">{{$user->full_name}}</td>
                <td class="px-4 py-2 border border-l-0">{{$user->email}}</td>
                <td class="px-4 py-2 border border-l-0">{{$user->tell_number}}</td>
                <td class="px-4 py-2 border border-l-0">{{$user->location}}</td>
                <td class="px-4 py-2 border border-l-0">
                    @if($user->isAdmin==1)
                        admin
                    @else 
                        user
                    @endif
                </td>
                <td class="px-4 py-2 border border-l-0 border-r-0">
                    <a href="{{route("admin.users.edit",$user->id)}}" class="px-2 py-1 text-white bg-blue-600 rounded-lg">
                        <i class="fas fa-cog"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</div>
