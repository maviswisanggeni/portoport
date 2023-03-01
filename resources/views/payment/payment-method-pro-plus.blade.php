<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
</head>
<body>
    <div class="payment-method">
        <img src="{{ asset('icons/back-icon.svg') }}" alt="">
        <p>Payment Method</p>
    </div>
    <div class="payment-method-container">
        <div class="pro">
            <p class="pro-title">Pro+</p>
            <p class="pro-description">All of our feature with
                Advanced Controll and support</p>
            <p class="pro-payment">Rp 150.000/Month</p>
            <div class="get-started">
                <button><p>Get Started</p></button>
            </div>
            <div class="pro-fitur">
                <p>Everything in pro and Able to upload limitless image, VIP Support.</p>
            </div>
        </div>
        <div class="payment-option">
            <div class="credit-card">
                <p>Credit Card</p>
                <img src="{{ asset('icons/arrow-forward.svg') }}" alt="">
            </div>
            <div class="digital-wallet">
                <p>Digital Wallet</p>
                <img src="{{ asset('icons/arrow-forward.svg') }}" alt="">
            </div>
        </div>
    </div>
</body>
</html>
