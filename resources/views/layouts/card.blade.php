<div class="card">
    <div class="card-header bg-danger">
        <h4 class="text-light text-uppercase">{{ $title }}</h4>
    </div>
    <div class="card-body">
        @if ($title == 'listing')
            <div class="row text-center">
                <form action="{{ route('create_house',[ 'id' => Auth::user()->id ]) }}" method="post" class="w-100">
                    @csrf
                    <div class="form-group">
                        <label>Home Type</label>
                        <select name="housetype" class="form-control w-50 mx-auto" required>
                            <option value="Apartment" {{ $house->housetype == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                            <option value="House" {{ $house->housetype == 'House' ? 'selected' : '' }}>House</option>
                            <option value="BedBreakfast" {{ $house->housetype == 'BedBreakfast' ? 'selected' : '' }}>Bed & Breakfast</option>
                        </select><br>
                        <label>Bedrooms</label>
                        <select name="bedrooms" class="form-control w-50 mx-auto" required>
                            <option value="1" {{ $house->bedrooms == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $house->bedrooms == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $house->bedrooms == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $house->bedrooms == '4' ? 'selected' : '' }}>4+</option>
                        </select><br>
                        <label>Room Type</label>
                        <select name="roomtype" class="form-control w-50 mx-auto" required>
                            <option value="Entire" {{ $house->roomtype == 'Entire' ? 'selected' : '' }}>Entire</option>
                            <option value="Private" {{ $house->roomtype == 'Private' ? 'selected' : '' }}>Private</option>
                            <option value="Shared" {{ $house->roomtype == 'Shared' ? 'selected' : '' }}>Shared</option>
                        </select><br>
                        <label>Bathrooms</label>
                        <select name="bathrooms" class="form-control w-50 mx-auto" required>
                            <option value="1" {{ $house->bedrooms == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $house->bedrooms == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $house->bedrooms == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $house->bedrooms == '4' ? 'selected' : '' }}>4+</option>
                        </select><br>
                        <label>Accommodate</label>
                        <select name="accommodate" class="form-control w-50 mx-auto" required>
                            <option value="1" {{ $house->bedrooms == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $house->bedrooms == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $house->bedrooms == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $house->bedrooms == '4' ? 'selected' : '' }}>4+</option>
                        </select>
                    </div>                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger mt-3">Save</button>
                    </div>
                </form>
            </div>
        @elseif($title == 'pricing')
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger mt-3">Save</button>
                    </div>
                </div>
            </form>
        @elseif($title == 'description')
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label>Listing name</label>
                    <input type="text" name="name" class="form-control">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger mt-3">Save</button>
                    </div>
                </div>
            </form>
        @elseif($title == 'photos')
            <form action="" method="post">
                @csrf
                <div class="form-group text-center">
                    <input type="file" name="photos"><br>
                    <button type="submit" class="btn btn-danger mt-3">Save</button>
                </div>
            </form>
        @elseif($title == 'amenities')
            <form action="" method="post">
                <div class="form-group">
                    <div class="row mb-5">
                        <div class="col-4 text-center">
                            <input type="checkbox" name="amenities"><span class="ml-2">TV</span>
                        </div>
                        <div class="col-4 text-center">
                            <input type="checkbox" name="amenities"><span class="ml-2">Kitchen</span>
                        </div>
                        <div class="col-4 text-center">
                            <input type="checkbox" name="amenities"><span class="ml-2">Internet</span>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-4 text-center">
                            <input type="checkbox" name="amenities"><span class="ml-2">Heating</span>
                        </div>
                        <div class="col-4 text-center">
                            <input type="checkbox" name="amenities"><span class="ml-2">Air Conditioning</span>
                        </div>
                    </div> 
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger mt-3">Save</button>
                    </div>
                </div>
            </form>
        @elseif($title == 'location')
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger mt-3">Save</button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>