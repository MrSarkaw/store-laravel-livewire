<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/font.css') }}" rel="stylesheet">
     <script src="{{ asset('js/app.js') }}" defer></script>
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
 
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

  
    <style>
        .swiper-slide {
           width:300px;            
           text-align: center;
       }
   </style>
   
     @livewireStyles
     @livewireScripts
     <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"  data-turbolinks-eval="false" data-turbo-eval="false"></script>

     

    

    </head>
    <body class="antialiased">
        <nav id="header" class="top-0 z-30 w-full py-1">
            <div class="container flex flex-wrap items-center justify-between w-full px-6 py-3 mx-auto mt-0">
    
                @auth
                <div class="order-3 hidden w-full md:flex md:items-center md:w-auto md:order-1">
                    @livewire("auth.logout")
                </div>
                @endauth
                <div class="order-1 md:order-2">
                    <a class="flex items-center text-xl font-bold tracking-wide text-gray-800 no-underline hover:no-underline " href="{{route("index")}}">
                        <svg class="mr-2 text-gray-800 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                        </svg>
                        NORDICS
                    </a>
                </div>
    
                <div class="flex items-center order-2 md:order-3" id="nav-content">
                    @guest
                    <a class="inline-block no-underline hover:text-black" href="{{route("login")}}">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>
                    @endguest
                    
                   
                    @auth
                        @if(Auth::user()->IsAdmin())
                        <a class="inline-block no-underline hover:text-black" href="{{route("admin.home")}}">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <circle fill="none" cx="12" cy="7" r="3" />
                                <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                            </svg>
                        </a>
                        @endif
                    
                        @if(Auth::user()->IsUser())
                        <a class="inline-block no-underline hover:text-black" href="{{route("user.index")}}">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <circle fill="none" cx="12" cy="7" r="3" />
                                <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                            </svg>
                        </a>
                        
                        
                        <a class="relative inline-block pl-3 no-underline hover:text-black" href="{{route("user.favorite")}}">
                            <span class="absolute px-1 text-xs text-white bg-red-500 rounded-full -right-2 -top-3">
                                @livewire("user.count-favorite")    
                            </span>
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                                <circle cx="10.5" cy="18.5" r="1.5" />
                                <circle cx="17.5" cy="18.5" r="1.5" />
                            </svg>
                        </a>
                        @endif  
                    @endauth
                      
                </div>
            </div>
        </nav>
        <div>
            @yield("content")
        </div>

        {{-- footer --}}

        <footer class="container py-8 mx-auto mt-10 bg-white border-t border-gray-400">
            <div class="container flex px-3 py-8 ">
                <div class="flex flex-wrap w-full mx-auto">
                    <div class="flex w-full lg:w-1/2 ">
                        <div class="px-3 md:px-0">
                            <h3 class="font-bold text-gray-900">About</h3>
                            <p class="py-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                        <div class="px-3 md:px-0">
                            <h3 class="font-bold text-gray-900">Social</h3>
                            <ul class="items-center pt-3 list-reset">
                                <li>
                                    <a class="inline-block py-1 no-underline hover:text-black hover:underline" href="#">Add social links</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

      

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var mySwiper2 = new Swiper('#swiper-container2', {
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                slidesPerView: 3,
                autoplay: {
                    delay: 3000,
                },

            });
        </script>
    
    </body>
       
  
  
      
</html>
