<html>

<head>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>


<body style="    
  background-image: url('shopping/shopping6.jpg');

  background-repeat: no-repeat;
  background-position: center;">
    





<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="text-primary h5 " ><i> Zubayda Estore</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="btn btn-outline-primary mx-2" href="/home">Home </a>
      </li>
     
      
      <li class="nav-item active">
        <a class="btn btn-outline-primary mx-2" href="/prodact">Prodercts </a>
      </li>


      

      <li class="nav-item active">
        <a class="btn btn-outline-primary mx-2" href="/whyus">Why Us </a>
      </li>


      <li class="nav-item active">
        <a class="btn btn-outline-primary mx-2" href="/contact">Contact </a>
      </li>
     
      <li class="nav-item active">
        <a class="btn btn-outline-primary mx-2" href="/contact">MyCart </a>
      </li>

    
    </ul>



    @guest
                   
                                <a class="btn btn-primary mx-2 px-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                       
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="btn btn-primary mx-2 px-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="">
                                <a id="" class="btn btn-primary mx-2 px-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                    <a class="btn btn-primary mx-2 px-3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


  </div>
</nav>



<center>
<div id="carouselExampleCaptions" class="carousel slide w-75 text-center mt-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images.jpg"  alt="..." width="800px " height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img16jpg.jpg"  alt="..." width="800px " height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" alt="..." width="800px " height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>


<h1 class="h1 text-primary my-5">Same Of Our Prodects</h1>





<div class="container">
  <div class="row">
    <div class="col-sm">
    



<div class="card" style="width: 18rem;">
  <img src="images (3).jpg" class="card-img-top" alt="..." width="200px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/prodact" class="btn btn-primary">Show more</a>
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;" >
  <img src="img17.jpg" class="card-img-top" alt="..." width="200px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <a href="/prodact" class="btn btn-primary">Show more</a>
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;" >
  <img src="images (6).jpg " class="card-img-top" alt="..." width="200px" height="300px">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/prodact" class="btn btn-primary">Show more</a>
  </div>
</div>
    </div>


  </div>

 




</div>



<br>



<hr color="cyan" width="80%">
<h6 class="h6 text-danger"><b> Created By Zubeyde</b></h6>
<br>






</center>


















                      











<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>