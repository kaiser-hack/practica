@extends('navegation')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-12  col-lg-6">
            <img  class=" img-fluid mb-4 " src="/img/about.svg" alt="Desarrollo">
          </div>

      <div class="col-12 col-lg-6 ">
        
        <h1 class=" display-4 text-primary " >Quien soy </h1>
<p class=" lead text-secondary " >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident temporibus molestiae ipsa expedita, quae eos laboriosam quos, totam, architecto vel mollitia porro reprehenderit! Harum aliquam eos accusamus rerum, illo quidem.
 
  <a class=" btn btn-lg btn-block btn-primary " href=" {{route('contact')}} ">Contantame</a>
  <a class=" btn btn-lg btn-block btn-outline-primary " href=" {{route('portafolio.index')}} ">Portafolio</a>

</p>

      </div>

      
    </div>
  </div>
@endsection