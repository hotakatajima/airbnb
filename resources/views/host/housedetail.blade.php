@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                @include('layouts.sidebar', [ 'house' => $house ])
            </div>
            <div class="col-8">
                @include('layouts.card', [ 'title' => $subject, 'house' => $house ])
            </div>
        </div>
    </div>
@endsection