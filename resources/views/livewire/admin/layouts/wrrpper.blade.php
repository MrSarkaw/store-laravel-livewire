
<div class="flex flex-row flex-wrap h-screen">
    <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap flex-none w-2/12 p-6 bg-white border-r border-gray-300 sm:w-7/12 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <div class="flex flex-col">
      <div class="hidden mb-4 text-right md:block">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>

      <p class="mb-4 text-xs tracking-wider text-gray-600 uppercase">Links</p>
      <a href="{{route("admin.home")}}" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-home"></i>                
        home
      </a>
      <a href="{{route("admin.users")}}" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-user"></i>                
        users
      </a>
      <a href="{{route("admin.posts")}}" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-chart-pie"></i>                
        posts
      </a>

      <a href="{{route("admin.order")}}" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-shopping-cart"></i>
        orders
      </a>
      

    </div>

  </div>

  <!-- strat content -->
  <div class="w-9/12 mx-auto sm:w-11/12 " id="contents">
    <div class="w-full">
      
      @yield("content")

      
    </div>
  </div>
    
</div>

