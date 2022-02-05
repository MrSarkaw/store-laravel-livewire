<div class="grid grid-cols-3 mt-6 lg:grid-cols-1">
    @foreach($posts as $post)
        @livewire('admin.posts.show-single-post', ['id'=>$post->id],key($post->id))
    @endforeach
    {{$posts->links()}}
</div>
