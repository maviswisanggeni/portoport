@extends('profile.all')
@section('content')
<div>
    <div class="con-banner-like">
        <img src="{{ asset('images/liked_product.png')}}" alt="" class="img-banner">
    </div>
    <div class="con-txt-inspiration">
        <h1 class="txt-inspiration">Express your appreciation</h1>
        <h1 class="txt-description">Show your appreciation for other's work by liking the shots you love. We'll collect all of your likes here for you to revisit anytime.</h1>
    </div>
    <div class="con-txt-description">
        <h1 class="txt-description">When browsing, just hover over a shot and click the</h1>
        <div class="con-btn-like">
            <img src="{{ asset('icons/heart.svg')}}" alt="">
            <a href="#" class="txt-description">Like</a>
        </div>
        <h1 class="txt-description">button</h1>
    </div>
</div>
@endsection
