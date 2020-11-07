
<div class="container  ">

    <div class="form-group  " >
<label > 
    Titulo del proyecto <br>
    </label>
    <input  class="form-control bg-light shadow-sm " type="text" name="title" value="{{old('title',$project->title)}}">

 </div>

<div class="form-group" >
<label > 
    Descripcion del  proyecto <br>
</label>
   <textarea class="form-control bg-light shadow-sm  " name="description" >{{old('description',$project->description)}}</textarea>

</div>
   
</div>
