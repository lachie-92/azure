@extends('app')

@section('content')

<ul>
    @foreach ($products as $product)
    <li>{{ $product->product_name }}</li>
    @endforeach
</ul>

@endsection

