<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="images-bg">
        <img src="{{ asset('images/reg-bg.png') }}" alt="">
        
        <p class="text-reg">are you a member?</p>
        <a href="/session/login" class="login-link">Login now</a>
        <div class="particle">
            <img src="{{ asset('images/subtract.png') }}" alt="">
        </div>
        
        
    </div>


        <div class="form">
            <div class="header">
                <p>Hi, Register here !</p>
            </div>
            <div class="desc">
                <p>Find creative inspiration in Portoport</p>
            </div>
            <div class="form-cn">
                <form class="card-form" method="post" action="/session/add">
                    @csrf
                    <div class="input">
                        <input type="text" class="input-field" name="name" value="{{ old('name')}}" required/>
                        <label class="input-label">Username</label>
                    </div>
                                <div class="input">
                        <input type="text" class="input-field" name="email" value="{{ old('email')}}" required/>
                        <label class="input-label">Email</label>
                    </div>
                                <div class="input">
                        <input type="password" class="input-field" name="password" value="{{ old('password')}}" required/>
                        <label class="input-label">Password</label>
                    </div>
                    <div class="action">
                        <button class="action-button" type="submit">Create Account</button>
                    </div>
                </form>
                <div class="card-info">
                    <p>Or signin with</p>
                </div>
        </div>



</body>
</html>