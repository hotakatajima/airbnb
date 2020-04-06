@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card w-75 mx-auto">
            <div class="card-header bg-danger text-light">
                All Your Listings
            </div>
            <div class="card-body">
                @foreach ($listings as $listing)
                    <div class="row">
                        <div class="col-4">
                            @if ($listing->image != null)
                                <img src="{{ $listing->image }}" class="w-100">
                            @else
                                <img src="/avatars/noimage.png" class="w-100">
                            @endif
                        </div>
                        <div class="col-4">
                            @if ($listing->image != null)
                                <h3>{{ $listing->name }}</h3>
                            @else
                                <h3 class="text-danger">No Name</h3>
                            @endif
                        </div>
                        <div class="col-4 text-center">
                            <a href="{{ route('hosuedetail',[ 'house_id' => $listing->id, 'subject' => 'listing' ]) }}" class="btn btn-danger float-bottom">Update</a>     
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection