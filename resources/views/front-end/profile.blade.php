<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
       #navbarNavAltMarkup {
        width: 100%;

    }

    #nav {
        position: fixed;
        top: 0%;
        z-index: 4;
        background-color: #2c2e40;
        width: 100%;
        display: flex;
        /* border-bottom:1px solid turquoise; */

    }

    #hov a {
        margin: 10px;
        color: white;
    }

    #hov a:hover {
        color: #616c7d;
    }

    .carousel-item img {
        object-fit: cover;
        /* object-fit: contain; */
        */ width: 100%;
        height: 500px;
    }

    .register a {
        width: 95px;
        margin: 2px;
        height: 45px;
        margin-top: 7px
    }
  </style>
  <body>
    <nav class="   navbar-expand-lg navbar-light bg-light">
        <div class="row">

            <div class="col-8">
                <div class="container-fluid" id="nav">
                    <a class="navbar-brand text-white pt-2" href="#">Cargo-Shipping</a>
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
                        <div class="navbar-nav " id="hov">
                            <a class="nav-link active   " aria-current="page" href="{{url('/')}}">Home</a>
                            {{-- <a class="nav-link   " href="#about-us">About Us</a>
                            <a class="nav-link   " href="#tracking-id">Track Id</a>
                            <a class="nav-link   " href="#contact-us">Contact US</a> --}}

                        </div>
                    </div>
                    @if (Auth::user())
                        <!-- Basic dropdown -->
                        <a class="btn btn-primary dropdown-toggle text-white m-2" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}}__</a>

                        <div class="dropdown-menu mr-4" >
                            <a class="dropdown-item " href="{{url('user/profile')}}">Profile</a>
                            <a class="dropdown-item " href="{{url('request-cargo')}}">Request Cargo</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="{{url('logout')}}">Log Out</a>
                            {{-- <a class="dropdown-item" href="#">Separated link</a> --}}
                        </div>
                        <!-- Basic dropdown -->
                    @else
                        <div class="col-2 register" style="display: flex";>
                            <a class="nav-link   btn btn-primary  " href="{{ url('home/login') }}">Log IN</a>

                            <a class="nav-link  btn btn-primary   " href="{{ url('home/sign_in') }}">Sign Up</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </nav>
      <section style="background-color: #eee; margin-top:30px;padding:90px">
        {{-- @if (!empty($user))
        @foreach ($user as $user ) --}}

        <div class="container py-5">


          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3"> {{Auth::user()->name}} </h5>
                  {{-- <p class="text-muted mb-1">Full Stack Developer</p>
                  <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
                </div>
              </div>

            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->name}} </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->email}} </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->mobile_no}}</p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Country</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->country}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->city}}</p>
                    </div>
                  </div>
                </div>
               <a href="{{url('user/edit-profile')}}" class="btn btn-success"> Edit Profile</a>
              </div>

            </div>
          </div>
        </div>

        @endforeach


        @endif
    </section>

      <footer class="page-footer font-small blue text-white " style="background-color: #2c2e40;">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2023 Copyright :
            OnlineCargoShipping.com
        </div>
        <!-- Copyright -->

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
