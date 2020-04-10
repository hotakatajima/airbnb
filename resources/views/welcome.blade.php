@extends('layouts.app')

@section('content')
    <div class="container">
        <p style="font-size:36px;" class="mt-5"><span class="text-danger">Hotabnb</span> Book unique homes and<br> experience a city like a local.</p>
        
        <form action="" method="">
            @csrf
            <div class="form-group">
                <div class="row">
                    <input type="text" name="" class="form-control d-inline-block" style="width:40%;" placeholder="Where are you going?">
                    <input type="date" name="" class="form-control d-inline-block ml-5" style="width:20%;">
                    <input type="date" name="" class="form-control d-inline-block ml-5" style="width:20%;">
                </div>
                <div class="row mt-5 text-right">
                    <div class="col-12 text-center">
                        <input type="submit" class="btn btn-danger w-25 d-inline-block" value="Search">
                    </div>
                </div>
            </div>
        </form>

        <hr class="my-5">
    
        <div class="homes">
            <h2 class="mb-3">Homes</h2>
            <div class="d-flex justify-content-between">
                <div class="row">
                    @foreach ($houses as $house)
                        <div class="col-4">
                            <div class="card mt-5 d-inline-block">
                                <div class="card-img-top">
                                    @if ($house->image != null)
                                        <img src="{{ $house->image }}" alt="" class="w-100">
                                    @else
                                        <img src="/avatars/noimage.png" class="w-100">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('eachhouse',[ 'id' => $house->id ]) }}">{{ $house->name }}</a><br>
                                    <span class="text-danger">{{ $house->price }}</span><br>
                                    ★★★★★<br>
                                    1 review
                                </div>
                            </div>
                        </div>  
                    @endforeach
                </div>
            </div>

        <div class="homes mx-auto mt-5">
            <h2>Cities</h2>
            <div class="row mt-5">
                <div class="col-3">
                    Tokyo
                    <a href="">
                        <img src="/avatars/tokyo.jpeg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
                <div class="col-3">
                    Kyoto
                    <a href="">
                        <img src="/avatars/kyoto.jpg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
                <div class="col-3">
                    Hokkaido
                    <a href="">
                        <img src="/avatars/hokkaido.jpeg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
                <div class="col-3">
                    Osaka
                    <a href="">
                        <img src="/avatars/osaka.jpg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection