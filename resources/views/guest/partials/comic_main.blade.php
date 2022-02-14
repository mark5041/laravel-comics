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
    
</main>

@endsection