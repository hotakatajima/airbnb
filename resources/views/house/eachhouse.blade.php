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
                        @if ( $house->amenitie1 == 1)
                            TV<br>
                        @else
                            <span style="text-decoration: line-through ;">TV</span><br>
                        @endif
                        @if ( $house->amenitie2 == 1)
                            Kitchen<br>
                        @else
                            <span style="text-decoration: line-through ;">Kitchen</span><br>
                        @endif
                        @if ( $house->amenitie3 == 1)
                            Internet<br>
                        @else
                            <span style="text-decoration: line-through ;">Internet</span><br>
                        @endif
                    </div>
                    <div class="col-4">
                        @if ( $house->amenitie4 == 1)
                            Heating<br>
                        @else
                            <span style="text-decoration: line-through ;">Heating</span><br>
                        @endif
                        @if ( $house->amenitie5 == 1)
                            Air Conditioning<br>
                        @else
                            <span style="text-decoration: line-through ;">Air Conditioning</span><br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $house->image }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <hr class="mt-3"style="color:gray;">
                        <h4>1 Review ★★★★★</h4>
                        <hr style="color:gray;">
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-3">
                        <img src="{{ $house->image }}" alt="" class="w-25 rounded-circle"><br>
                        {{ $house->name }}
                    </div>
                    <div class="col-9">
                        ★★★★★<br>
                        {{ $house->created_at }}<br>
                        {{ $house->description }}<br>
                    </div>
                </div>
                <hr style="color:gray;">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d263.47613142202204!2d123.88639128205062!3d10.318512446584062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999352d8b3def%3A0xdc079678b95b8b15!2sAYO%20AYO%20CAFE!5e0!3m2!1sja!2sph!4v1586515580877!5m2!1sja!2sph" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <hr class="mt-3"style="color:gray;">
                        <h4>Near by</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img src="/avatars/house1.jpg" alt="" class="w-100">
                            <div class="card-body">
                                <a href="" >name</a><br>
                                (0.0 kms away)
                            </div>
                        </div> 
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="/avatars/house1.jpg" alt="" class="w-100">
                            <div class="card-body">
                                <a href="" >name</a><br>
                                (0.0 kms away)
                            </div>
                        </div> 
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="/avatars/house1.jpg" alt="" class="w-100">
                            <div class="card-body">
                                <a href="" >name</a><br>
                                (0.0 kms away)
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection