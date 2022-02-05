<div class="flex flex-row flex-wrap items-center p-6 bg-white border-b border-gray-300 md:fixed md:w-full md:top-0 md:z-20">
    
    <!-- logo -->
    <div class="flex flex-row items-center flex-none w-56">
      <a href="{{route("index")}}" class="flex">
        
        <svg class="mr-2 text-gray-800 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
      </svg>
      
      <strong class="flex-1 ml-1 capitalize">store</strong>
      </a>

      <button id="sliderBtn" class="flex-none hidden ml-10 text-right text-gray-900 md:block">
        <i class="fad fa-list-ul"></i>
      </button>
    </div>
    <!-- end logo -->   
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="right-0 hidden mr-6 md:block md:fixed">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="flex flex-row flex-wrap items-center justify-between flex-1 pl-3 animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:hidden md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
      
      </div>
      <!-- end left -->      

      <!-- right -->
      <div class="flex flex-row-reverse items-center"> 

        <!-- user -->
        <div class="relative dropdown md:static">

          <button class="flex flex-wrap items-center menu-btn focus:outline-none focus:shadow-outline">
         

            <div class="flex ml-2 capitalize ">
              <h1 class="p-0 m-0 text-sm font-semibold leading-none text-gray-800">{{Auth::user()->full_name}}</h1>
              <i class="ml-2 text-xs leading-none fad fa-chevron-down"></i>
            </div>                        
          </button>

          <button class="fixed top-0 left-0 z-10 hidden w-full h-full menu-overflow"></button>

          <div class="absolute right-0 z-20 hidden w-40 py-2 mt-5 text-gray-500 bg-white rounded shadow-md menu md:mt-10 md:w-full animated faster">

            <!-- item -->
            <a class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="#">
              <i class="mr-1 text-xs fad fa-user-edit"></i> 
              edit my profile
            </a>     
            <!-- end item -->

            <hr>

            <!-- item -->
            <button  class="w-full px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white cursor hover:bg-gray-200 hover:text-gray-900" wire:click="logout">
              <i class="mr-1 text-xs fad fa-user-times"></i> 
              log out
            </button>     
            <!-- end item -->

          </div>
        </div>
       
        
      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

</div>