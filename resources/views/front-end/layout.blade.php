<!doctype html>
<html lang="en">

<head>
    <title>Cargo-Shipping</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    /* ////////////////////////// */
    button {
        font-family: inherit;
        font-size: 18px;
        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
        color: white;
        padding: 0.8em 1.2em;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 25px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s;
    }

    button:hover {
        transform: translateY(-3px);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
    }

    button:active {
        transform: scale(0.95);
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    button span {
        display: block;
        margin-left: 0.4em;
        transition: all 0.3s;
    }

    button svg {
        width: 18px;
        height: 18px;
        fill: white;
        transition: all 0.3s;
    }

    button .svg-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.2);
        margin-right: 0.5em;
        transition: all 0.3s;
    }

    button:hover .svg-wrapper {
        background-color: rgba(255, 255, 255, 0.5);
    }

    button:hover svg {
        transform: rotate(45deg);
    }
</style>

<body>
    <nav class="   navbar-expand-lg navbar-light bg-light">
        <div class="row">

            <div class="col-8">
                <div class="container-fluid" id="nav">
                    <a class="navbar-brand text-white pt-2" href="{{ url('/') }}">Cargo-Shipping</a>
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
                        <div class="navbar-nav " id="hov">
                            <a class="nav-link active   " aria-current="page" href="{{ url('/') }}">Home</a>
                            <a class="nav-link   " href="#about-us">About Us</a>
                            <a class="nav-link   " href="{{ url('trackid') }}">Track Id</a>
                            <a class="nav-link   " href="#contact-us">Contact US</a>

                        </div>
                    </div>
                    @if (Auth::user())
                        <!-- Basic dropdown -->
                        <a class="btn btn-primary dropdown-toggle text-white m-2" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}}__</a>

                        <div class="dropdown-menu mr-4" >
                            <a class="dropdown-item " href="{{url('user/profile')}}">Profile</a>
                            <a class="dropdown-item " href="{{url('user/cargo-history')}}">Cargo History</a>
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




@yield('content')




    {{-- /////////////////////////////footer /////////////////// --}}

    <!-- Footer -->
    <footer class="page-footer font-small blue text-white " style="background-color: #2c2e40">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2023 Copyright :
            OnlineCargoShipping.com
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->











    <!--Section: Contact v.2-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>


