<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
</head>
<body>
    <div class="footer-container">
        <div class="footer">
            <div class="logo">
                <p>PORTOPORT</p>
                {{-- <img src="{{ asset('images/portoport-logo.png') }}" alt="logo"> --}}
                <div class="social-media">
                    <a href=""><img class="social-media-icon" src= {{asset('images/instagram-footer.png')}}  alt="instagram"></a>
                    <a href=""><img class="social-media-icon" src= {{asset('images/youtube-footer.png')}}  alt="youtube"></a>
                    <a href=""><img class="social-media-icon" src= {{asset('images/gmail-footer.png')}}  alt="gmail"></a>
                    <a href=""><img class="social-media-icon" src= {{asset('images/twitter-footer.png')}}  alt="twitter"></a>
                    <a href=""><img class="social-media-icon" src= {{asset('images/linkedin-footer.png')}}  alt="linkedin"></a>
                </div>
                <h3>© 2023 Portoport. All rights reserved.</h3>
            </div>
        </div>
    </div>

</body>
</html>
