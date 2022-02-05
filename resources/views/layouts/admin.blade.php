<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  
 
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

  
  @livewireStyles
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-track="reload" data-turbolinks-eval="false" data-turbo-eval="false" defer></script>

  <style>

    @media only screen and (max-width:500px){
      .tables{
        width:350px !important;
      }
    }
  </style>


  <title>Welcome To store</title>
</head>
<body class="bg-gray-100">

    <div id="app"></div>
    @livewire("admin.layouts.navbar")
    
    @livewire("admin.layouts.wrrpper")
    
 
    <!-- script -->

    <script src="{{ asset('js/scripts.js') }}" ></script>
  
    <!-- end script -->
  



</body>
</html>
