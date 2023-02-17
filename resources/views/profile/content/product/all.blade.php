@extends('profile.all')
@section('content')
<div class="container-col">
    <div class="container-row">
        <img class="product">
        <img class="product">
        <img class="product">
        <div class="container-upload">
            <div class="container-btn-upload">
                <img class="btn-icon" src="{{ asset('icons/upload-outline.svg') }}" alt="upload">
            </div>
            <img class="product">
            <h1 class="txt-upload0">Upload your first product</h1>
            <h1 class="txt-upload1">Show your best work. Get good reviews and earn money from your product</h1>
            <div class="con-btn-upload">
                <a href="#" class="txt-upload">Upload now</a>
            </div>
        </div>
    </div>
    <div class="container-row">
        <img class="product">
        <img class="product">
        <img class="product">
        <img class="product">
    </div>
</div>
@endsection
{{-- src="{{ asset('#')}}" --}}