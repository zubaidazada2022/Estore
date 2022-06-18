@extends('layouts.app')
@section('content')




<div class="card card-default" >

<div class=" card-header text-success text-center h3">{{$title}}</div>
<div class=" card-body">

<form action="{{isset($Prodact) ? action('ProdactController@update',$Prodact->id) : action('ProdactController@store') }}"
   enctype="multipart/form-data"  method="POST">
    @csrf
    @if ( isset($Prodact))
    @method('PUT')
    @endif
    
        <div class="form-group ">
         
       <input type="text" name="title" class="form-control w-50 mx-auto "
         placeholder="title" value="{{isset($Prodact) ? $Prodact->title :''}}">
                   @if (isset($Prodact))


          price:
          <input  name="price" class="my-2  form-control w-50  mx-auto "
          placeholder="price" rows="3" value="{{$Prodact->price}}">
           
         

            Description:
            <textarea name="des" rows="3" class="my-2 w-50  form-control mx-auto "
            placeholder="Description" >{{$Prodact->des}}</textarea>
            <div class="text-center my-3">
            <img src="{{asset('storage/'.$Prodact->image)}}" class="text-center" width="250px" height="125px">
          </div>
           
                
            @else
            <input  name="price" class="my-2  form-control w-50 mx-auto "
            placeholder="price" rows="3"></input>


             
          <textarea name="des" rows="3" class="my-2 form-control w-50 mx-auto "
          placeholder="Description" ></textarea>  
           
            @endif

        

          
            <center>           <input type="file" name="image" class="form-control-file my-2  w-50  "
           placeholder="image" id="exampleFormControlFile1"> 
           </center>

           
        
        </div>
     
        <div class="form-group text-center ">
            <button type="submit" class="btn btn-info px-5">Save</button>
            
          </div>
  


</div>



</div>





@endsection