@extends('Admin.index')
   @section('content')
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Request Cargos</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Cargos</h5>

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
                    <th scope="col">Sender Name</th>
                    <th scope="col">Reciver Name</th>
                    <th scope="col">Item</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(!empty($cargos))
                        @foreach ($cargos as $key => $cargo)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $cargo->sender_name }}</td>
                            <td>{{ $cargo->receiver_name }}</td>
                            <td>{{ $cargo->item_name }}</td>
                            <td>{{ $cargo->cost }}</td>
                            <td>{{ $cargo->payment_status }}</td>
                            <td>{{ $cargo->status }}</td>
                            <td><a href="{{ url('admin/delete-cargo',$cargo->id) }}">Delete</a></td>
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
