@extends('layouts.app')

@section('title', 'Produkte')


@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
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
            </div>
        </div>
    </div>
</section>
    
@endsection