@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary">
    <div class="container">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                 @foreach ($pets as $pet)
                    <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 mt-8">
                        <div class="card-body">
                          <img src="{{ url($pet->imageUrl) }}" alt="" class="w-full max-h-60">
                            <h3 class="text-gray-700 uppercase">{{ $pet->name }}</h3>
                            <span class="mt-2 text-black-500">{{ $pet->gender }} | {{ $pet-> color}}</span><br>
                            <span class="mt-2 text-danger">RM {{ $pet->price }}</span> <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $pet->id }}" name="id">
                                <input type="hidden" value="{{ $pet->name }}" name="name">
                                <input type="hidden" value="{{ $pet->price }}" name="price">
                                <input type="hidden" value="{{ $pet->imageUrl }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="btn btn-primary my-4"> <i class="ni ni-cart text-white"></i> Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
</div>
@endsection