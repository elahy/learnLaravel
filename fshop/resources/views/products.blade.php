{{-- @extends('layouts.app')

@section('content') --}}

<div style="display: flex; justify-content:space-evenly; flex-wrap:wrap">
    @foreach ($product as $item)
    <img alt="Product image" src={{ $item->image}} width="300px" />
    <p> {{ $item->name}} </p>
    <p> {{ $item->price}} </p>
    <p> {{ $item->description}} </p>
    <a href="{{ url('/products',$item->id)}}">Details</a>
        
    @endforeach
</div>
{{-- @endsection --}}