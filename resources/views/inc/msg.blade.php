@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
       <div class="alert alert-danger">
           {{$error}}
       </div> 
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success p-3 mt-3 mb-3">
        {{session('success')}}
    </div>  
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>  
@endif