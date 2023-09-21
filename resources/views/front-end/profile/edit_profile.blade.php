@extends('front-end.layout')
@section("content")
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
                    <form action="{{URL::to('user/update-profile')}}" method="post">
                        @csrf
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Name</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                      {{-- <p class="text-muted mb-0">{{$user->name}} </p> --}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" readonly name="email" value="{{Auth::user()->email}}">

                        {{-- <p class="text-muted mb-0">{{$user->email}} </p> --}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="mobile_no" value="{{Auth::user()->mobile_no}}">

                        {{-- <p class="text-muted mb-0">{{$user->mobile_no}}</p> --}}
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Country</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="country" value="{{Auth::user()->country}}">
                        {{-- <p class="text-muted mb-0">{{$user->country}}</p> --}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="city" value="{{Auth::user()->address}}">
                        {{-- <p class="text-muted mb-0">{{$user->city}}</p> --}}
                    </div>
                  </div>
                </div>
               <button type="submit" class="btn btn-success"> Update Profile</button>
              </div>
            </form>

            </div>

          </div>
        </div>
{{--
        @endforeach


        @endif --}}
    </section>

    @endsection