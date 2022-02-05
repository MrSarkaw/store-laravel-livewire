<div class="w-full md:mt-20 card">
    <div x-data="{showUser:true,addUser:false}">
        <div class="card-header">
            <button class="px-4 py-1 text-white bg-blue-500 rounded-lg focus:outline-none" x-show="addUser"
                @click="addUser=false,showUser=true"><i class="fas fa-users"></i> users</button>
            <button class="px-4 py-1 text-white bg-blue-500 rounded-lg focus:outline-none" x-show="showUser"
                @click="showUser=false,addUser=true"><i class="fas fa-user"></i> add user</button>
        </div>

        <div class="mt-6" x-show="showUser">
            @livewire("admin.user-section.show-user")
        </div>
        <div class="mt-6" x-show="addUser">
            @livewire("admin.user-section.adduser")
        </div>
    </div>

</div>
