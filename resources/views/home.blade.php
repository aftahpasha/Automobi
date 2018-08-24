<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AutoMobi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
  </head>
  <body>

    @if(Auth::user()->status == 0)
    <script type="text/javascript">

    window.location.href="/administrator"

    </script>
    @endif


    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/home"> <img src="/img/logo.png" width="130px"> </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <a class="nav-item nav-link" href="#">Product <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Dealers</a>
          <a class="nav-item nav-link" href="#">Contact</a>
          <a class="nav-item nav-link" href="#">Support</a>

        </ul>
        <form action="" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <ul class="nav nav-dark justify-content-end bg-dark">

  <li class="nav-item">
    <a class="nav-link text-light bg-danger" href="/user">User</a>
  </li>

  <li class="nav-item">

  <a class="nav-link text-light bg-danger" href="{{ route('logout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>

</li>

</ul>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/banner1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/banner2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/banner3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="row">


<div class="col-12 col-md-4">

<div class="list-group">
  <a href="#" class="list-group-item-secondary list-group-item list-group-item-action active list-group-">
Category  </a>
@foreach($kt as $kat)
  <a href="/home/{{$kat -> kategori}}"  class="list-group-item list-group-item-action">{{$kat->kategori}}</a>
@endforeach
</div>
</div>


<div class="col-12 col-md-8">

@foreach($item as $items)
<div class="card" style="width:300px; float:left;">
  <img class="card-img-top" src="{{Storage::url($items -> file)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$items -> merek}} {{$items -> tipe}}</h5> <h5 class="card-title">{{$items -> harga}}</h5>

    <p class="card-text">{{$items -> isi}}</p>
    <a href="/home/cart/{{$items -> id}}" class="btn btn-danger">Order Now!</a>
  </div>
  </div>
@endforeach

</div>


</div>



<footer class="container-fluid py-5 bg-danger">
      <div class="row">
        <div class="col-12 col-md">
      <img src="/img/logo.png" width="200px" alt="">
          <small class="d-block mb-3 text-light">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Cool stuff</a></li>
            <li><a class="text-light" href="#">Random feature</a></li>
            <li><a class="text-light" href="#">Team feature</a></li>
            <li><a class="text-light" href="#">Stuff for developers</a></li>
            <li><a class="text-light" href="#">Another one</a></li>
            <li><a class="text-light" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Resource</a></li>
            <li><a class="text-light" href="#">Resource name</a></li>
            <li><a class="text-light" href="#">Another resource</a></li>
            <li><a class="text-light" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Business</a></li>
            <li><a class="text-light" href="#">Education</a></li>
            <li><a class="text-light" href="#">Government</a></li>
            <li><a class="text-light" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Team</a></li>
            <li><a class="text-light" href="#">Locations</a></li>
            <li><a class="text-light" href="#">Privacy</a></li>
            <li><a class="text-light" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>




<script type="text/javascript" src="/js/bootstrap.min.js">

</script>
<script type="text/javascript" src="/js/jquery.min.js">

</script>
<script type="text/javascript" src="/js/app.js">

</script>

  </body>
</html>
