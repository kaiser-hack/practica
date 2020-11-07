@if (session('status'))
<div class="alert alert-primary alert-dismissible fade show" role="alert" >
    <button type="button" class="closed btn-sm btn-danger "  data-dismiss="alert" aria-label="Closed" >
        {{session('status')}}
        <span aria-hidden="true" >&times;</span>

    </button>
</div> 
    @endif