{{-- @extends('layouts.app')

@section('content') --}}

<div>
    @foreach ($product as $item)
    <img alt="Product image" src={{ $item->image}} width="400px" />
    <p> {{ $item->name}} </p>
    <p> {{ $item->price}} </p>
    <p> {{ $item->description}} </p>
        
    @endforeach
</div>
{{-- @endsection --}}