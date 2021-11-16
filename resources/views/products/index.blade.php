@extends('layouts.app')

@section('title', 'Produkte')


@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="products-container">
                    @foreach($products as $product)
                   
                        <article class="card">
                            <a href="{{ url('/products/' . $product->id) }}">
                            @php  $image = json_decode($product->images); @endphp
                            <img src="images/products/shoe/{{  $image[0] }} " class="card-img-top" alt="{{ $product->productTitle }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->productTitle }}</h5>
                                <div class="card-text">
                                    <div class="card-price">
                                        @if ($product->discount > 0)
                                            <b class="price lineThrough">{{ $product->price }} €</b>
                                            <b class="discount">{{ $product->discount }} €</b>
                                        @else 
                                            <b class="price">{{ $product->price }} €</b>
                                        @endif
                                    </div>
                                
                                </div>
                            </div>
                        </a>
                        </article>
                   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    
@foreach($products as $product)
                <h3>Content</h3>
                id: {{ $product->id }} <br>
                productTitle:     {{ $product->productTitle }} <br>
                productText:     {{ $product->productText }} <br>
                productNo:    {{ $product->productNo }} <br>
                productsDate:    {{ $product->productsDate }} <br>
                category_id:    {{ $product->category_id }} <br>
                price:    {{ $product->price }} <br>
                discount:    {{ $product->discount }} <br>
                <h3>Bilder</h3>
                <ol>
                @foreach (json_decode($product->images) as $image) 
                    <li> {{ $image }} </li>    
                 @endforeach
                </ol>
                    
                 <hr>
                @endforeach


@endsection