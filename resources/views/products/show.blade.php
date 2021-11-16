@extends('layouts.app')

@section('title', $product->productTitle)

@section('content')
    <section class="products-overview-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <figure class="thumbnail">
                            @foreach(json_decode($product->images) as $image)
                            <img
                            src="/images/products/shoe/{{  $image }}"
                            alt=""
                            class="small-img-1"
                          />
                          @endforeach
                        </figure>
                        <figure class="product-image">
                            <img
                            src="/images/products/shoe/{{  json_decode($product->images[0]) }}"
                            alt=""
                            class="big-img-1"
                          />
                        </figure>
                    </div>

                    <div class="product-content">
                        <h5 class="heading">{{ $product->productTitle }}</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            {{ $product->productText}}
                        </p>
                        <div class="price">
                            {{ $product->discount }}
                            <span> {{ $product->price }}</span>
                        </div>
                        <div class="btn-container">
                            <a href="#" class="btn">add cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@php 
    dump($product);
@endphp
