<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/home"> <img src="/img/logo.png" width="130px"> </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <a class="nav-item nav-link" href="#">Purchase <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Dealers</a>
          <a class="nav-item nav-link" href="#">Contact</a>
          <a class="nav-item nav-link" href="#">About</a>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid bg-light">
                <form action="/home/cart/beli" method="post" class="card p-2">
    <div class="row">

{{csrf_field()}}
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">{{$item -> merek}} <br> {{$item -> tipe}}  </h6>
                <input type="hidden" name="barang" value="{{$item -> merek}}{{$item -> tipe}}">
                <small class="text-muted">{{$item -> isi}}</small><br>
                  <label for="input" style="float:left;" class="">Jumlah :</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control field" value="">
             <input type="hidden" name="" id="price" class="price" value="{{$item -> price}}">
              </div>

            </li>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (Rp)</span>
              <strong class="harga" id="harga">0</strong>
              <input type="hidden" id="harga" name="harga" value="{{$item -> harga}}">

            </li>
          </ul>



          <input type="text" class="form-control" disabled>

        </div>
        <br>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Shop Cart</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="nama_depan" class="form-control" id="firstName" placeholder="" value="{{Auth::user()->nama_depan}}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="nama_belakang" id="lastName" placeholder="" value="{{Auth::user()->nama_belakang}}" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username"  placeholder="Username" value="{{Auth::user()->name}}" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="{{Auth::user()->email}}">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="alamat" id="address" placeholder="1234 Main St" required="" value="{{Auth::user()->alamat}}">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Phone Number</label>
              <input type="text" class="form-control" name="telfon" id="address2" value="{{Auth::user()->telfon}}" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select name="negara" class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  @foreach($negara as $negaras)
                  <option value="{{$negaras -> nama}}">{{$negaras -> nama}}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">City</label>
                <input type="text" class="d-block w-100 form-control" name="kota" value="{{Auth::user()->kota}}">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" value="{{Auth::user()->kode_pos}}" id="zip" name="kode_pos" placeholder="" required="" maxlength="6">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">**Payment Information will be Inform in the upcoming E-Mail Verivications</h4>
            <hr class="mb-4">
            <button class="btn btn-danger btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
                </form>

    </div>

    <script type="text/javascript" src="/js/jquery.min.js">


    </script>
    <script>


      $(".field").change(function(){
        var jumlah = $(".price").val() * $(".field").val();
        $(".harga").text(jumlah);
      });

    </script>
    <script type="text/javascript" src="bootstrap.min.js">

    </script>
    <script type="text/javascript" src="app.js">

    </script>
    <script type="text/javascript" src="/js/angular.min.js">

    </script>

  </body>
</html>
