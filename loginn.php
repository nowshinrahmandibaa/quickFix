<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | QuickFix</title>
<link rel="stylesheet" href="main-style.css">
<style>
.login-container {
    display: flex; justify-content: center; align-items: center; min-height: 80vh;
}
.login-card {
    background: white; padding: 40px; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    width: 100%; max-width: 400px; text-align: center;
}
.input-group { text-align: left; margin-bottom: 20px; }
.input-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #555; }
.input-group input { width: 100%; padding: 12px; border: 2px solid #eee; border-radius: 10px; outline: none; transition: 0.3s; }
.input-group input:focus { border-color: #4895ef; }
</style>
</head>
<body>

<nav>
    <h1 onclick="window.location.href='index.html'" style="cursor:pointer">Quick<span>Fix</span></h1>
    <ul>
        <li><a href="Main_homepage.html">Back to Home</a></li>
    </ul>
</nav>

<div class="container login-container">
    <div class="login-card">
        <h2>Welcome Back!</h2>
        <form method="POST" action="login.php">
            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="abcd@mail.com" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;">Login Now</button>
        </form>
        <p style="margin-top:20px;">Don't have an account? <a href="signup.html" style="color:#4895ef;">Sign Up</a></p>
    </div>
</div>

</body>
</html>