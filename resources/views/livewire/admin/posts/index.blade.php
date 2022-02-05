<div class="w-full md:mt-20 card">
    <div x-data="{showPost:true,addPost:false}">
        <div class="card-header">
            <button class="px-4 py-1 text-white bg-blue-500 rounded-lg focus:outline-none" x-show="addPost"
                @click="addPost=false,showPost=true"><i class="fas fa-users"></i> posts</button>
            <button class="px-4 py-1 text-white bg-blue-500 rounded-lg focus:outline-none" x-show="showPost"
                @click="showPost=false,addPost=true"><i class="fas fa-user"></i> add post</button>
        </div>

        <div  x-show="showPost">
            
           @livewire('admin.posts.show-post')

        </div>

        
        <div class="mt-6" x-show="addPost">
            @livewire('admin.posts.add-post')
        </div>
    </div>

</div>
