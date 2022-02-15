@extends('layouts.app')
@push('css')
<!-- custom css -->
@endpush
@section('title', 'Products')

@section('content')
<div class="container">
    <div class="pt-5 text-white">
        <header class="py-5 mt-5">
            <h1 class="display-4">Hello {{$name}}</h1>
        </header>
        <div class="row justify-content-center">
            @if (count($products)>0)
            @foreach($products as $product)
            <div class="col-md-12 col-lg-3 mb-4 mb-lg-4 mx-1">
                <div class="row justify-content-center">
                    <div class="card text-dark bg-white border-dark">
                        <img src={{$product->img}} class="card-img-top" alt="Apple Computer" width="100%" height="250px"/>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="text-muted mb-4">{{$product->content}}</p>
                            </div>
                            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                <span>Total</span><span>{{explode('.',$product->price)[0]}}<sup>{{explode('.',$product->price)[1]}}</sup></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- custom scripts -->
@endpush