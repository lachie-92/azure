@extends('app')

@section('content')

@include('pages.shoppingcart.summary.partial.breadcrumbs')
@include('pages.shoppingcart.summary.partial.order')

@endsection

@section('custom_script')

    @include('pages.shoppingcart.summary.partial.script')

@endsection