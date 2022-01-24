@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @foreach ($products as $product)
                        <div>
                            <label>{{$product->name}}</label>
                            <label>{{$product->description}}</label>
                            <label>{{$product->price}}</label>
                            <button>Add to Cart</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection