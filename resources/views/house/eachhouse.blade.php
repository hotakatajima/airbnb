@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{ $house->image }}" alt="" class="w-100">
        <div class="row mt-5">
            <div class="col-5">
                {{ $house->name }}<br>
                {{ $house->address }}
            </div>
            <div class="col-2">
                @if ($house->user->image == null)
                    <img src="/avatars/anonymous.jpeg" alt="" class="w-100 rounded-circle">
                @else
                    <img src="{{ $house->user->image }}" alt="" class="w-100 rounded-circle">
                @endif
                <p class="text-center">{{ $house->user->name }}</p>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">{{ $house->price }}</span>
                        <span class="float-right">Per Night</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                Check In
                                <form action="" method="post">
                                    @csrf
                                    <input type="date" name="">
                                </form>
                            </div>
                            <div class="col-6">
                                Check Out
                                <form action="" method="post">
                                    @csrf
                                    <input type="date" name="">
                                </form>
                            </div>
                            <input type="submit" value="Book Now" class="btn btn-danger w-75 mt-5 mx-auto" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col-3 text-center">
                        <i class="fas fa-home" style="font-size:40px;"></i><br>
                        {{ $house->housetype }}
                    </div>
                    <div class="col-3 text-center">
                        <i class="fas fa-user" style="font-size:40px;"></i><br>
                        {{ $house->accommodate }} Guests
                    </div>
                    <div class="col-3 text-center">
                        <i class="fas fa-bed" style="font-size:40px;"></i><br>
                        {{ $house->bedrooms }} Bedrooms
                    </div>
                    <div class="col-3 text-center">
                        <i class="fas fa-bath" style="font-size:40px;"></i><br>
                        {{ $house->bathrooms }} Bathrooms
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h3>About This Listing</h3><br>
                <span>{{ $house->description }}</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-4 ">
                        <h3>Amenities</h3>
                    </div>
                    <div class="col-4">
                        <span>TV</span><br>
                        Kitchen<br>
                        Internet<br>
                    </div>
                    <div class="col-4">
                        Heating<br>
                        Air Conditioning<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection