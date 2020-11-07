@extends('navegation')

@section('content')

<div class="container">
    
    <div class="row" >
        <div class="col-12  col-sm-10 col-lg-6 mx-auto">

@include('partial.validation-error')
    

<form class="bg bg-white py-3 px-4 shadow round" method="POST" action="{{route('portafolio.store')}}">
@csrf
<h1 class="d-flex display-4 ">Nuevo proyecto</h1>
<hr>

   @include('partial.form')
    <button class="btn btn-primary btn-block " >Guardar</button>    


</form>
</div>
    </div>
</div>
@endsection