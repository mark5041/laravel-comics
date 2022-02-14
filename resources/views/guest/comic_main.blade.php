@extends('guest.layouts.home')

@section('homapage')

<main class="comic">

    <div class="divider_blue">
        <div class="cover">
            <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
            <span>Comic Book</span>
            <span>View gallery</span>
        </div>
    </div>
    
    <div class="comic_info">
            <div class="my-container py-4">
                <div class="info_section col-9">
                    <div class="info">
                        <h1>{{ $comic['title'] }}</h1>
                        <div class="price d-flex">
                            <div class="d-flex left_side">
                                <div class="price_left">
                                    U.S. Price: <span class="text-white">{{ $comic['price'] }}</span>
                                </div>
                                <div class="price_right">AVAILABLE</div>
                            </div>
                            <div class="right_side">
                                <div class="check text-white text-center">
                                    Check Availability <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            {{ $comic['description'] }}
                        </div>
                    </div>
                </div>
                <div class="adv col-3">
                    <span>ADVERTISMENT</span>
                    <img class="img-fluid" src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
</main>

@endsection