<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
	<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
</head>
<body>
    <div class="overlay">

    </div>
    <div class="container">
        <div class="logo">
			<img src="{{ URL::to('/img/logo.png') }}">
        </div>
		<form method="POST" action="/auth"> 
			@csrf
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="em" class="form-control" />
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="pwd" class="form-control" />
			</div>
			<div style="text-align:center">
				<button class="login-button">Login</button>
				<a href="/register" class="login-button" style="font-size:80%; ">Register</a>
			</div>
		</form>
    </div>
</body>
</html>
