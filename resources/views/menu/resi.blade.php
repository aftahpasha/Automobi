<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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


            </div>
            <br>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3 alert alert-success">Checkout Success!</h4> <hr>
              <form class="needs-validation" novalidate="">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" disabled name="nama_depan" class="form-control is-valid"  placeholder="" value="{{Auth::user()->nama_depan}}" required="">

                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" disabled class="form-control is-valid" name="nama_belakang" id="lastName" placeholder="" value="{{Auth::user()->nama_belakang}}" required="">

                  </div>
                </div>

                <div class="mb-3">
                  <label for="username">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                    <input type="text" disabled class="form-control is-valid" id="username" name="username" placeholder="Username" value="{{Auth::user()->name}}" required="">

                  </div>
                </div>

                <div class="mb-3">
                  <label for="email">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" disabled class="form-control is-valid" id="email" name="email" placeholder="you@example.com" value="{{Auth::user()->email}}">

                </div>

                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" disabled class="form-control is-valid" name="alamat" id="address" placeholder="1234 Main St" required="" value="{{Auth::user()->alamat}}">

                </div>

                <div class="mb-3">
                  <label for="address2">Phone Number</label>
                  <input type="text" disabled class="form-control is-valid" name="telfon" id="address2" value="{{Auth::user()->telfon}}" placeholder="Apartment or suite">
                </div>


                  <div class="col-md-4 mb-3">
                    <label for="state">City</label>
                    <input type="text" disabled class="d-block w-100 form-control is-valid" name="kota" value="{{Auth::user()->kota}}">

                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" disabled class="form-control is-valid" value="{{Auth::user()->kode_pos}}" id="zip" name="kode_pos" placeholder="" required="" maxlength="6">

                  </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="same-address">

                </div>

                <hr class="mb-4">

              </form>
            </div>
          </div>

                  </form>
                  <div class="container-fluid">
                    <label class="alert alert-block alert-primary" for="same-address">Shipping address is the same as my billing address</label>

                  </div>
                          <a class="btn btn-success btn-lg btn-block" href="/home">Go Back to Home</a>

        </div>

        <script type="text/javascript" src="jquery.min.js">

        </script>
        <script type="text/javascript" src="bootstrap.min.js">

        </script>
        <script type="text/javascript" src="app.js">

        </script>
      </body>
    </html>

  </body>
</html>
