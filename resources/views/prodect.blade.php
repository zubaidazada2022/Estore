
@extends('layouts.app')
@section('content')
    
    <div class="card card-default " >

        <div class="card-header text-center h3 text-danger">Prodact List<a href="{{route('prodact.create')}}" class="btn btn-success float-right">New Prodact  </a>

         </div> 
        
        <div class="card-body text-dark h6 ">
            

            <table class="table table-striped " >


         
            </div>
</div>




<div class="container">
<br>



<div class="container">
  <div class="row">
 @foreach ($prodact as $p)
    <div class="col-sm my-2">
      

    
<div class="card" style="width: 18rem;">
  <img src="{{asset('storage/'.$p->image)}}" class="card-img-top" alt="..." width="200px" height="300px">
  <div class="card-body">
    <h5 class="card-title text-center">{{$p->title}}</h5>
    <p class="card-text">{{$p->des}}</p>

    <button href="#" class="btn btn-primary ">  {{$p->price}}</button>
                       
    
        <a href="{{route('prodact.edit',$p->id)}}" class="btn btn-primary   float-right py-0 px-4">
                                                       Edit </a>
   

  <form action="{{action('ProdactController@destroy',$p->id)}}" method="POST">   @method('DELETE')
                                                @csrf <button type="submit" class="btn btn-danger  float-right py-0 ">
                                                    Delete </button></form>


  </div>
</div>
 

    </div>
   @endforeach 
  </div>
</div>





</div>
 


    
@endsection