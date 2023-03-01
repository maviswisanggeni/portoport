<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail | Portoport</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail-page/detail-content.css') }}">
    <link rel="shortcut icon" href="{{ asset('icons/x-icon.svg') }}" type="image/x-icon">
</head>
<body>
    @include('components.navbar')

    <div class="detail-container">
        @yield('detail-content')
        @yield('side-menu')
    </div>

    <div class="more-container">
        @yield('more')
    </div>

    <div class="recomended-container">
        @yield('recomended')
    </div>

    <div class="btn-popup" onclick="javascript:history.back()">
        <h1>Go Back</h1>
    </div>

    <script src="{{ asset('scripts/dtl-side-menu.js') }}"></script>
    <script src="{{ asset('scripts/btn-popup.js') }}"></script>
    
</body>
</html>