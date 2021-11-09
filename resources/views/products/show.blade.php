@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <section class="products-overview">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $product->title }}</h1>
                    <p>
                        {{ $product->content}}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection