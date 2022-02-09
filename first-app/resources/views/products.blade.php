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
            @foreach($products as $key=>$value)
            <div class="col-md-12 col-lg-3 mb-4 mb-lg-4 mx-1">
                <div class="row justify-content-center">
                    <div class="card text-dark bg-white border-dark">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/3.webp" class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title">{{$key}}</h5>
                                <p class="text-muted mb-4">{{$value}}</p>
                            </div>
                            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                <span>Total</span><span>$7,197.00</span>
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