@extends('navegation')

@section('content')
<div class="container">

   <div class="bg-white p-5  shadow rounded " >
 <h1 class="display-4" >{{$project->title}}</h1>

 <p> {{$project->description}}</p>
 <p>{{$project->created_at->diffforHumans()}}</p>

 <div class=" d-flex justify-content-between " >
    <a  class="btn btn-secondary " href=" {{route('portafolio.index')}} ">Regresar  </a>
 @auth
 <div class="btn-group ">
 <a class=" btn btn-success mx-1 " href=" {{route('portafolio.edit', $project)}} ">Editar</a>
 <a class=" btn btn-danger " href="#" onclick="document.getElementById('delete').submit() " >Eliminar</a>

</div>
 <form class="d-none"  id="delete" method="POST" action="{{route('portafolio.destroy', $project)}}">
    @csrf @method('DELETE')
 </form>


 @endauth
</div>

</div>
</div>
@endsection