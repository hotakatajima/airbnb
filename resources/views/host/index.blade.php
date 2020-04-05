@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-danger">
                <span class="text-light">Create your beautiful place</span>
            </div>
            <div class="card-body text-center">
                <div class="row text-center">
                    <form action="{{ route('create_house',[ 'id' => Auth::user()->id ]) }}" method="post" class="w-100">
                        @csrf
                        <div class="form-group">
                            <label>Home Type</label>
                            <select name="housetype" class="form-control w-50 mx-auto" required>
                                <option disabled selected>Select</option>
                                <option value="Apartment">Apartment</option>
                                <option value="House">House</option>
                                <option value="BedBreakfast">Bed & Breakfast</option>
                            </select><br>
                            <label>Bedrooms</label>
                            <select name="bedrooms" class="form-control w-50 mx-auto" required>
                                <option disabled selected>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                            </select><br>
                            <label>Room Type</label>
                            <select name="roomtype" class="form-control w-50 mx-auto" required>
                                <option disabled selected>Select</option>
                                <option value="Entire">Entire</option>
                                <option value="Private">Private</option>
                                <option value="Shared">Shared</option>
                            </select><br>
                            <label>Bathrooms</label>
                            <select name="bathrooms" class="form-control w-50 mx-auto" required>
                                <option disabled selected>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                            </select><br>
                            <label>Accommodate</label>
                            <select name="accommodate" class="form-control w-50 mx-auto" required>
                                <option disabled selected>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                            </select>
                        </div>                    
                        <hr>
                        <button type="submit" class="btn btn-danger mt-3">Create Room</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection