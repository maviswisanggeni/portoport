<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="images-bg">
        <img src="{{ asset('images/log-bg.jpg') }}" alt="">
        
        <p class="text-log">dont have account?</p>
        <a href="/session/register" class="reg-link">Create now!</a>
        <div class="particle">
            <img src="{{ asset('images/subtract.png') }}" alt="">
        </div>
        
        
    </div>

    
        <div class="form">
            <div class="header">
                <p>Hi, Welcome back !</p>
            </div>
            <div class="desc">
                <p>Find creative inspiration in Portoport</p>
            </div>
            <div class="form-cn">
                <form class="card-form" method="post" action="/session/logins">
                    @csrf
                    <div class="input">
                        <input type="text" class="input-field" name="email" required/>
                        <label class="input-label">Email</label>
                    </div>
                                <div class="input">
                        <input type="text" class="input-field" name="password" required/>
                        <label class="input-label">Password</label>
                    </div>
                    <div class="input">
                    <label class="container">Remember me
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>   
                    <div class="action">
                        <button class="action-button" type="submit">Login now</button>
                    </div>
                    <div>
                        <a href="" class="forget-link">Forget Password</a>
                    </div>
                </form>
                <div class="card-info">
                    <p>Or login with</p>
                </div>
        </div>
    



</body>
</html>