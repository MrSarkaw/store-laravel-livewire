<div class="flex-1 p-6 bg-gray-100 md:mt-16"> 

    
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


    <!-- card -->
    <div>
        <div class="card">
            <div class="flex flex-col card-body">
                <div class="flex flex-row items-center justify-between">
                    <div class="text-indigo-700 h6 fad fa-shopping-cart"></div>
                    
                </div>
                <div class="mt-8">
                    <h1 class="h5">
                        {{$sales}}
                    </h1>
                    <p>items sales</p>
                </div>                    
            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div>
    <!-- end card -->
    <!-- card -->
    <div>
        <div class="card">
            <div class="flex flex-col card-body">
                <div class="flex flex-row items-center justify-between">
                    <div class="text-yellow-700 h6 fad fa-user"></div>
                    
                </div>
                <div class="mt-8">
                    <h1 class="h5">
                        {{$users}}
                    </h1>
                    <p>users</p>
                </div>                    
            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div>
    <!-- end card -->
    <!-- card -->
    <div>
        <div class="card">
            <div class="flex flex-col card-body">
                <div class="flex flex-row items-center justify-between">
                    <div class="text-green-700 h6 fad fa-tshirt"></div>
                    
                </div>
                <div class="mt-8">
                    <h1 class="h5">
                        {{$product}}
                    </h1>
                    <p>products</p>
                </div>                    
            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div>
    <!-- end card -->


    </div>
</div>
