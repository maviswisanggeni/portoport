@extends('profile.all')
@section('content')
<div class="col">
    <div class="row">
        <div class="container-left">
            <h1 class="text-b">Biography</h1>
            <h1 class="text-b1">Design that makes ideas work.</h1>
            <h1 class="text-s">Skills</h1>
            <div class="skills">
                <div class="td">
                    <h1 class="text-s1">3D Modeling</h1>
                </div>
                <div class="design">
                    <h1 class="text-s1">Design</h1>
                </div>
                <div class="art">
                    <h1 class="text-s1">Art</h1>
                </div>
                <div class="sculpting">
                    <h1 class="text-s1">Sculpting</h1>
                </div>
                <div class="texture">
                    <h1 class="text-s1">Texture</h1>
                </div>
            </div>
            <div class="info">
                <div class="followers">
                    <h1 class="text-s2">0</h1>
                    <h1 class="text-s2">followers</h1>
                </div>
                <div class="following">
                    <h1 class="text-s2">0</h1>
                    <h1 class="text-s2">following</h1>
                </div>
            </div>
        </div>
        <div class="container-right">
            <div class="container-link">
                <div class="s-facebook">
                <img src="{{ asset('icons/facebook.svg')}}" alt="" class="ic-l">
                <a href="#" class="txt-share">Share</a>
                </div>
                <div class="link">
                    <img src="{{ asset('icons/insert-link.svg')}}" alt="" class="ic-l">
                    <a href="#" class="txt-link">Copy</a>
                </div>
                <div class="s-twitter">
                    <img src="{{ asset('icons/twitter.svg')}}" alt="" class="ic-l">
                    <a href="#" class="txt-tweet">Tweet</a>
                </div>
            </div>
            <div class="container-desc">
                <div class="location">
                    <img src="{{ asset('icons/location.svg')}}" alt="" class="ic-location">
                    <h1 class="text-s2">West Java, Indonesia</h1>
                </div>
                <div class="about-member">
                    <img src="{{ asset('icons/about-member.svg')}}" alt="" class="ic-member">
                    <h1 class="text-s2">Member since March 2022</h1>
                </div>
            </div>
            <div class="container-social">
                <h1 class="text-s">Social</h1>
                <div class="instagram">
                    <img src="{{ asset('icons/instagram.svg')}}" alt="" class="ic-ig">
                    <a href="#" class="txt-ig">Instagram</a>
                </div>
                <div class="facebook">
                    <img src="{{ asset('icons/facebook.svg')}}" alt="" class="ic-fb">
                    <a href="#" class="txt-fb">Facebook</a>
                </div>
                <div class="twitter">
                    <img src="{{ asset('icons/twitter.svg')}}" alt="" class="ic-twitter">
                    <a href="#" class="txt-twitter">Twitter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection