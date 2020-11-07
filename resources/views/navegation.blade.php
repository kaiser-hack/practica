<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">
    <script src="/js./app.js" defer ></script>
   
    <style>
        
    </style>
</head>
<body>
    <main>

    <div  class="d-flex flex-column h-screen justify-content-between  "  id="id" >
   
    <nav class="navbar navbar-light bg-white shadow-sm  navbar-expand-sm" >
        <div class="container">
        <a class="navbar-brand" href=" {{route('home')}} ">
       {{config('app.name')}} </a>

       <button class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" 
        aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="nav " >
        

        <li class="nav-item"><a class="  nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="  nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="  nav-link" href="/portafolio">Portafolio</a></li>
        <li class="nav-item"><a class="  nav-link" href="contact">Contact</a></li>
        @guest
        <li ><a class=" active nav-link" href=" {{route('login')}} ">Login</a></li>
        
        @else

        <li><a class=" active nav-link" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>

        @endguest
    </ul>
</div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<br>
@include('partial.status')
@yield('content')

</div>
</main>


</body>




</html>