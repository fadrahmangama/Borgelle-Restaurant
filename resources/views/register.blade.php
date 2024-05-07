<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
</head>
<body>
    <div class="overlay">

    </div>
    <div class="container">
        <div class="logo">
            <img src="{{ URL::to('/img/logo.png') }}">
        </div>
		<form style="margin:20px" method="POST" action="/register"> 
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="nm" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="em" class="form-control" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pwd" class="form-control" />
            </div>
            <div style="text-align:center">
                <button class="login-button">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
