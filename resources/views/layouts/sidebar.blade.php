<div class="card mb-3">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="{{ route('hosuedetail',['house_id' => $house_id, 'subject' => 'listing' ]) }}">Listing</a><span class="float-right">✔︎</span></li>
        <li class="list-group-item"><a href="{{ route('hosuedetail',['house_id' => $house_id, 'subject' => 'pricing' ]) }}">Pricing</a><span class="float-right">{{ $house->price == null ? '' : '✔︎' }}</span></li>
        <li class="list-group-item"><a href="{{ route('hosuedetail',['house_id' => $house_id, 'subject' => 'description' ]) }}">Description</a><span class="float-right">{{ $house->name == null ? '' : '✔︎' }}</span></li>
        <li class="list-group-item"><a href="{{ route('hosuedetail',['house_id' => $house_id, 'subject' => 'photos' ]) }}">Photos</a><span class="float-right">{{ $house->image == null ? '' : '✔︎' }}</span></li>
        <li class="list-group-item"><a href="{{ route('hosuedetail',['house_id' => $house_id, 'subject' => 'amenities' ]) }}">Amenities</a><span class="float-right">✔︎</span></li>
        <li class="list-group-item"><a href="{{ route('hosuedetail',['house_id' => $house_id, 'subject' => 'location' ]) }}">Location</a><span class="float-right">{{ $house->address == null ? '' : '✔︎' }}</span></li>
    </ul>
</div>
@if ($house->price != null && $house->name != null && $house->image != null && $house->address != null && $house->publish == false)
    <form action="{{ route('publish', ['id' => $house->id] ) }}" method="post" class="text-center">
        @csrf
        <button type="submit" class="btn btn-danger text-light w-50">Publish</button>
    </form>
@else
    <form action="" method="post" class="text-center">
        @csrf
        <button type="submit" class="btn btn-danger text-light w-50" disabled>Publish</button>
    </form>
@endif