@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card w-75 mx-auto">
            <div class="card-header bg-danger text-light">
                Your Trip
            </div>
            <div class="card-body pt-0 pb-5">
                @foreach ($trips as $trip)
                    <div class="row mt-5">
                        <div class="col-2">
                            {{ $trip->checkout_date }}
                        </div>
                        <div class="col-2">
                            <img src="{{ $trip->house->pictures->first()->picture }}" alt="" class="w-100" style="height:80px;">
                        </div>
                        <div class="col-5">
                            <a href="{{ route('eachhouse',[ 'id' => $trip->house->id ]) }}">{{ $trip->house->name }}</a><br>
                            <img src="{{ $trip->user->image }}" alt="" class="d-inline-block rounded-circle" style="width:40px; height:40px;">
                            <a href="{{ route('userprofile',[ 'id' => $trip->user->id ]) }}" class="mr-3">{{ $trip->user->name }}</a>
                        </div>
                        <div class="col-3">
                            <form action="">
                                <div class="form-group">
                                    @csrf
                                    <input type="submit" value="Review Host" class="btn btn-danger text-light form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection