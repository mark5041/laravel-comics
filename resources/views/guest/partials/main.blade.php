@extends('guest.layouts.home')

@section('homapage')
<main>
    <div class="content-section">
        <div class="my-container">
            <div class="title">
                <h1>CURRIENT SERIES</h1>
            </div>
            <div class="thumbs">
            @foreach($comics as $card) 
                <div class="thumb">
                    <div class="image-box">
                        <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                    </div>
                    <span class="thumb-title">{{$card['series']}}</span>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="product-section">
        <div class="my-container">


            @foreach($products as $card) 
            <div class="item">
                <img src="{{$url.$card['image']}}" :alt="">
                <span>{{$card['description']}}</span>
            </div>
            @endforeach

        </div>
    </div>
</main>
@endsection