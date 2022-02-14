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
                        <div class="right_side d-flex">
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

    <div class="details">
        <div class="my-container row">
            <div class="col-6">
                <h1 class="divider-bt py-4 m-0">Talent</h1>
                <div class="paragraph py-2 divider-bt">
                    <div class="col-4 px-0">
                        <span>Art by:</span>
                    </div>
                    <div class="col-8 px-0">
                        <span> 
                            @foreach ($comic['artists'] as $element)
                                <a>{{ $element }}</a>,
                            @endforeach
                        </span>
                    </div>
                </div>

                <div class="paragraph py-2 divider-bt">
                    <div class="col-4 px-0">
                        <span>Written by:</span>
                    </div>
                    <div class="col-8 px-0">
                        <span> 
                            @foreach ($comic['writers'] as $element)
                                <a>{{ $element }}</a>,
                            @endforeach
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <h1 class="divider-bt py-4 m-0">Specs</h1>
                <div class="paragraph py-2 divider-bt">
                    <div class="col-4 px-0">
                        <span>Series:</span>
                    </div>
                    <div class="col-8 px-0">
                        <span> 
                            {{$comic['series']}}
                        </span>
                    </div>
                </div>

                <div class="paragraph py-2 divider-bt">
                    <div class="col-4 px-0">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="col-8 px-0">
                        <span> 
                            {{$comic['price']}}
                        </span>
                    </div>
                </div>

                <div class="paragraph py-2 divider-bt">
                    <div class="col-4 px-0">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="col-8 px-0">
                        <span> 
                            @php
                                $date=date_create_from_format("Y-m-d",$comic['sale_date']);
                                $date = date_format($date,"M d Y");
                            @endphp
                            {{$date}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="my-container">
                @foreach($shop as $card) 
                <div class="item">
                    <img src="{{asset('img/'.$card['image'])}}" :alt="">
                    <span>{{$card['description']}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>

@endsection