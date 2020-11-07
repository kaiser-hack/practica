@extends('navegation')

@section('content')

@include('partial.status')

<div class="div container">
    
    <div class="row" >
        <div class="col-12  col-sm-10 col-lg-6 mx-auto">


            <form class="bg-white shadow rounder py-3 px-3" method="POST" action="{{route('contact')}}">
                @csrf

                <h1 class= " display-4 mx-2" >Contact</h1>
                <hr>                
                <div class="form-group">
                    <label for="name">Nombre</label>
                <input class="form-control bg-light shadow-sm @error('name') is-invalid @else()border-0 @enderror " type="text " name="name" placeholder="Nombre" value="{{old('name')}}" >
                
                
                @error('name')
                <span class="invalid-feeback" role="alert" >
                
                    <strong> {{$message}} </strong>
                </span>
                
                @enderror
                
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                <input class="form-control bg-light shadow-sm @error('email') is-invalid @else()border-0 @enderror " type="text " name="email" placeholder="email" value="{{old('email')}}" >
                
                
                @error('email')
                <span class="invalid-feeback" role="alert" >
                
                    <strong> {{$message}} </strong>
                </span>
                
                @enderror
                
                </div>
                
                <div class="form-group">
                    <label for="subject">Asunto</label>
                <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else()border-0 @enderror " type="text " name="subject" placeholder="asunto" value="{{old('subject')}}" >
                
                
                @error('subject')
                <span class="invalid-feeback" role="alert" >
                
                    <strong> {{$message}} </strong>
                </span>
                
                @enderror
                
                </div>
                
                
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else()border-0 @enderror " type="text " name="content" value="{{old('content')}}"  name="content" placeholder="{{old('content')}}"></textarea>
                    {{$errors->first('content')}}
                </div> 
                    
                    <br>
                    <button class="btn-block btn-primary btn-lg " >Enviar</button>
                </form>
                </div>

        </div>
    </div>


@endsection