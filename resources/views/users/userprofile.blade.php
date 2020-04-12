@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    @if ($user->image != null)
                        <img class="card-img-top" src="{{ $user->image }}" alt="" style="width:100%; height:253px; object-fit: cover; ">
                    @else
                        <img src="/avatars/black.png"  style="width:100%; height:253px; object-fit: cover; ">
                    @endif
                    <div class="card-header bg-danger mt-1">
                        <div class="text-light">Verfication</div>
                    </div>
                    <div class="card-body">
                        Facebook<span class="float-right">✔︎</span><br>
                        @if ($user->phone == null)
                            Phone Number
                        @else
                            Phone Number<span class="float-right">✔︎</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-8 ml-5">
                <div class="row">
                    <div class="col-12 p-0">
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->description }}</p>
                        <h4 class="mt-3">Listing({{ $user->houses->count() }})</h4>
                    </div>
                </div>
                <div class="row">
                    @if ($user->houses->count() > 0)
                        @foreach ($user->houses->where('publish',1) as $house)
                            <div class="col-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ $house->pictures->first()->picture }}" alt="" style="width:100%; height:175px; object-fit: cover;">
                                    <div class="card-body">
                                        <a href="{{ route('eachhouse',[ 'id' => $house->id ]) }}">{{ $house->name }}</a><br>
                                        {{ $house->price }}円 - {{ $house->housetype }} - {{ $house->bedrooms }} beds
                                        ☆☆☆☆☆☆ 1 review
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        This person is not host.
                    @endif
                </div>
                <div class="row mt-3">
                    <h4 class="w-100">Reviews From Guests()</h4>
                    <p>There are no reviews.</p>
                </div>
                <div class="row mt-3">
                    <h4 class="w-100">Reviews From Hosts()</h4><br>
                    <p>There are no reviews.</p>
                </div> 
            </div> 
        </div>
    </div>

@endsection