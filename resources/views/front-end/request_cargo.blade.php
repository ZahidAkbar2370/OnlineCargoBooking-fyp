@extends('front-end.layout')
@section("content")

<section class="mb-4 m-5" id="contact-us">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 pt-5">Request Cargo</h2>
    <!--Section description-->


    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5" style="display:block;margin:auto ;margin-top:20px">
            <form id="contact-form" name="contact-form" action="{{ URL::to('user/request-cargo') }}" method="POST">
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
                        <div class="md-form mb-0">
                            <label  class="">Sender Name</label>
                            <input type="text" id="sender_name" name="sender_name" class="form-control">
                        </div>
                    </div>    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label  class="">Sender Mobile No</label>
                            <input type="number" id="sender_mobile_no" name="sender_mobile_no" class="form-control">
                        </div>
                    </div>    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="" class="">Sender Email</label>
                            <input type="text" id="sender_email" name="sender_email" class="form-control">
                        </div>
                    </div>    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="" class="">Sender full address</label>
                            <input type="text" id="sender_full_address" name="sender_full_address" class="form-control">
                        </div>
                    </div>


                    <!--Grid column-->
                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="receiver_name" class="">receiver_name</label>
                            <input type="text" id="receiver_name" name="receiver_name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>

                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="receiver_email" class="">Receiver email</label>
                            <input type="text" id="receiver_email" name="receiver_email" class="form-control">
                        </div>
                    </div>

                 <!--Grid row-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="receiver_full_address" class="">Receiver Full Address</label>
                            <input type="text" id="receiver_full_address" name="receiver_full_address" class="form-control">
                        </div>
                    </div>

                 <!--Grid row-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="item_name" class="">Item Name</label>
                            <input type="text" id="item_name" name="item_name" class="form-control">
                        </div>
                    </div>

                 <!--Grid row-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="item_description" class="">Item Description</label>
                            <input type="text" id="item_description" name="item_description" class="form-control">
                        </div>
                    </div>

                 <!--Grid row-->

                    {{-- <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="cost" class="">Cost</label>
                            <input type="text" id="cost" name="cost" class="form-control">
                        </div>
                    </div> --}}

                 <!--Grid row-->
                 {{-- <div class="row">
                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="payment_status" class="">payment_status</label>
                            <input type="text" id="payment_status" name="payment_status" class="form-control">
                        </div>
                    </div>
                </div>
                 <!--Grid row-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="status" class="">Status</label>
                            <input type="text" id="status" name="status" class="form-control">
                        </div>
                    </div> --}}



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