@extends('navegation')

@section('content')

<div class="container">
  <div class="d-flex justify-content-between align-items-center " >
<h1 class="display-4" >Portafolio</h1>

<br>
@auth
<a class="btn btn-primary " href=" {{route('portafolio.create')}} ">Crear Proyecto</a>


@endauth
</div>

<ul class="list-group">
    @forelse ($portafolio as $item)
        
    <li class="list-grup-item border-0 mb-3 shadow-sm" >

      <a class="d-flex justify-content-between align-items-center " href="{{route('portafolio.show', $item)}}"> 

        <span class="text-secondary font-weight-bold " > {{$item->title}}</span>
        
        <span>{{$item->created_at->format('d/m/Y')}} </span>   
       </a> 
      
    </li>
    @empty 
    <li class="list-grup-item border-0 mb-3 shadow-sm">No hay ningun proyecto</li>
    @endforelse
   
</ul>
</div>
@endsection