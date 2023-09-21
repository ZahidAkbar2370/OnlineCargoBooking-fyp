@extends("front-end.layout")
@section('content')


<div class="mt-5">
    <span class="mb-5"></span>
<h1 class="mt-5  text-center" style="margin-top: 50px">Cargo History</h1>

@if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
</div>
<div class="table-responsive mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tracking No</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Sender Mobile NO</th>
                <th scope="col">Receiver Name</th>
                <th scope="col">Receiver Mobile No</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Status</th>
                <th scope="col">Cost</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($cargos))
                @foreach ($cargos as $key => $cargo)
                <tr>
                    <th scope="row">
                        {{ $key+1 }}
                    </th>
                    <td>
                        {{ $cargo->traking_no }}
                    </td>
                    <td>{{ $cargo->sender_name }}</td>
                    <td>{{ $cargo->sender_mobile_no }}</td>
                    <td>{{ $cargo->receiver_name }}</td>
                    <td>{{ $cargo->receiver_mobile_no }}</td>
                    <td>{{ $cargo->payment_status }}</td>
                    <td>{{ $cargo->status }}</td>
                    <td>{{ $cargo->cost }}</td>
                    <td><a href="{{ url('user/delete-cargo',$cargo->id) }}" onclick="return confirm('Are you sure to Delete Cargo?')">Delete</a></td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    </div>

@endsection