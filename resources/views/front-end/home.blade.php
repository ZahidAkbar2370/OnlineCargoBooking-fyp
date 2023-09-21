
@extends('front-end.layout')
@section("content")

    {{-- ////////////////////////////section//////////////////////  --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style=" ">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('slider_image/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('slider_image/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('slider_image/3.jpg') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('slider_image/4.jpg') }}" alt="Third slide">
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        {{-- <h1 class="text-center" style="margin-top: -60px">The Best CargoShipping</h1> --}}
    </div>



    {{-- ////////////////////////////////////about secdtion ////////////////////////// --}}

    <div class="aboutus-section" style="margin-bottom:15px;margin-top:45px;  " id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-6 col-xs-12 mt-5 mb-5">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text text-justify">Our company prides itself on our commitment to excellence,
                            reliability, and customer satisfaction. We understand that shipping cargo can be a complex
                            process, which is why we offer comprehensive logistics solutions tailored to meet the unique
                            needs of our clients. Whether you require full-container loads (FCL) or less-than-container
                            loads (LCL), we have the capacity and expertise to handle it all..</p>
                        <a class="aboutus-more btn btn-primary" href="#">Read more</a>
                    </div>
                </div>
                {{-- <div class="col-md-3 col-sm-6 col-xs-12 mt-5 mb-5">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                    </div>
                </div> --}}
                <div class="col-md-5 col-md-6 col-xs-12 mt-5 mb-5">

                    <div class="about-img">

                        <img src="{{ asset('slider_image/about_us.avif') }}" alt=""
                            style="width: 100%;height:390px;border-radius:5px">

                    </div>



                </div>
            </div>
        </div>
    </div>




    {{-- ////////////////////////////////////tarckin ////////////////////  --}}
    <div class="row " style=" padding:55px;margin-top:15px; background-color:#4b4e6b; color:white"
        id="tracking-id">
        {{-- <form class="col-md-4 " action="{{URL::to('track-id')}}" method="post" style="display:block;margin:auto">
            @csrf --}}
            {{-- <div class="form-group ">
                {{-- <label for="exampleInputEmail1 ">Tracking</label> --}}
                {{-- <input type="text" name="track_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Tracking Id">
            </div> --}}
            <a href="{{ url('trackid') }}" style="display:block;margin:auto"  class="btn btn-primary">Track Your ID</a>

        {{-- </form> --}}
    </div>


    {{-- /////////////////////////// contact us //////////////////////
    \ --}}
    <!--Section: Contact v.2-->
    <section class="mb-4 m-5" id="contact-us">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->


        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5" style="display:block;margin:auto ;margin-top:20px">
                <form id="contact-form" name="contact-form" action="{{ url('home/contact_us') }}" method="POST">
                    @csrf
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="md-form mb-0">
                                <label for="subject" class="">Phone #</label>
                                <input type="text" id="subject" name="phone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            </div>

                        </div>

                    </div>
                    {{-- <input type="submit" class=" text-white btn btn-primary mt-3"
                        style="display:block;margin:auto; width:120px" value="Send Message"> --}}
                    <!--Grid row-->

                    <button type="submit" class="mt-3" style="display:block;margin:auto; width:100px;height:80px">
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span> Send</span>
                    </button>

                </form>

                {{-- <div class="text-center text-md-left">
                    <a class=" text-white btn btn-primary" style="display:block;margin:auto; width:100px"
                        onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div> --}}
            </div>
            <!--Grid column-->

        </div>

    </section>
@endsection