@extends('front-end.layout')
@section("content")


    {{-- ////////////////////////////////////tarckin ////////////////////  --}}
    <div class="row " style=" padding:55px;margin-top:15px; background-color:#4b4e6b; color:white"
        id="tracking-id">
        <form class="col-md-4 " action="{{URL::to('trackid')}}" method="post" style="display:block;margin:auto">
            @csrf
            <div class="form-group ">
                @if(!empty($cargoData))
                    <div class="row">
                        <div class="card col-4">
                            <h4 class="text-dark">Tracking #:{{ $cargoData->traking_no }}</h4>
                        </div>

                        <div class=" card col-4">
                            <h4 class="text-dark">Status: {{ $cargoData->status }}</h4>
                        </div>

                        <div class="card col-4">
                            <h4 class="text-dark">Payment:{{ $cargoData->payment_status }}</h4>
                        </div>
                    </div>
                @else
                    @if(isset($found) && $found == 0)
                        <h3>Not Found</h3>
                    @endif
                @endif
                <label for="exampleInputEmail1 ">Tracking ID</label>
                <input type="text" name="track_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Tracking Id">
            </div>
            <button style="display:block;margin:auto" type="submit" class="btn btn-primary">Track</button>

        </form>

        
    </div>



@endsection

