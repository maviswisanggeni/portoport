<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navprofile.css')}}">
    <link rel="stylesheet" href="{{ asset('css/product.css')}}">
    <link rel="stylesheet" href="{{ asset('css/likedproduct.css')}}">
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
    <title>Profile</title>
</head>
<body>
    <div class="container-profile-col">
        <img src="{{ asset('images/profile.png')}}" alt="profile" class="profile">
        <div class="container-profile-row">
            <h1 class="font-nama">Rangga Al Madinah Ar Riyadh</h1>
            <h1 class="font-kelas">11 Animation 2</h1>
            <h1 class="font-asal">West Java, Indonesia</h1>
            <div class="container-profile-edit">
                <div class="container-btn-profile">
                    {{-- <a href="{{ route('profile.edit') }}" class="btn-edit">Edit Profile</a> --}}
                    <a class="btn-edit">Edit Profile</a>
                </div>
                <div class="container-btn-set">
                    <img class="btn-settings" src="{{ asset('icons/more-horizontal-outline.svg') }}" alt="edit">
                </div>
            </div>
        </div>
    </div>
    @include('components.navprofile')
    <div class="container-profile">
        @yield('content')
    </div>
    <script src="{{ asset('scripts/navprofile.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('scripts/navprofile.js') }}">
</body>
</html>