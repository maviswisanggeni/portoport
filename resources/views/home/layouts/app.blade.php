<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Portoport</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/card-product.css">
    <link rel="stylesheet" href="css/products.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</head>
<body>
    @include('components.navbar')

    <div class="main-container">
        @yield('main')
    </div>
    
    @include('components.footer')
    <script src="scripts/navbar.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/products.js"></script>
</body>
</html>