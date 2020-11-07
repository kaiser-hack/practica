@extends('navegation')

@section('content')


@include('partial.validation-error')
<div class="container">
    
  <div class="row" >
      <div class="col-12  col-sm-10 col-lg-6 mx-auto">
    


<form class="bg bg-white py-3 px-4 shadow round" method="POST" action="{{route('portafolio.update', $project)}}">
  @method('PATCH')
@csrf
<h1 class="d-flex display-4 ">Editar proyecto</h1>
@include('partial.form')

    <button class="btn btn-success btn-block " >Actualizar</button>    
   <a href=" {{route('portafolio.index')}} "> <button class="btn btn-link btn-block " >Cancelar</button> </a> 

</form>
      </div>
  </div>
</div>
@endsection