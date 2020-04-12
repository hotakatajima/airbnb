@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card w-75 mx-auto">
            <div class="card-header bg-danger text-light">
                Your Reservation
            </div>
            <div class="card-body pt-0 pb-5">
                @foreach ($reservations as $reservation)
                    <div class="row mt-5">
                        <div class="col-2">
                            {{ $reservation->checkout_date }}
                        </div>
                        <div class="col-2">
                            <img src="{{ $reservation->house->pictures->first()->picture }}" alt="" class="w-100" style="height:80px;">
                        </div>
                        <div class="col-5">
                            <a href="{{ route('eachhouse',[ 'id' => $reservation->house->id ]) }}">{{ $reservation->house->name }}</a><br>
                            <img src="{{ $reservation->user->image }}" alt="" class="d-inline-block rounded-circle" style="width:40px; height:40px;">
                            <a href="{{ route('userprofile',[ 'id' => $reservation->user->id ]) }}" class="mr-3">{{ $reservation->user->name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection