@extends('Admin.index')
   @section('content')
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Users</h5>

              @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(!empty($users))
                        @foreach ($users as $key => $user)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile_no }}</td>
                            <td><a href="{{ url('admin/delete-user',$user->id) }}">Delete</a></td>
                          </tr>
                        @endforeach
                    @endif
            
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
