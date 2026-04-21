<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | QuickFix</title>
    <link rel="stylesheet" href="main-style.css">
</head>
<body>

<div class="auth-card">
    <h2 style="text-align: center;">Create Account</h2>

    <form method="POST" action="signup-process.php">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn btn-primary" style="width: 100%;">Sign Up</button>
    </form>

    <p style="text-align: center; margin-top: 15px;">
        Already have an account? <a href="loginn.php">Login</a>
    </p>
</div>

</body>
</html>