<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickFix | Professional Local Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main-style.css">
</head>
<body>

<nav>
    <h1>Quick<span>Fix</span></h1>
    <ul>
        <li><a href="Main_homepage.php">Home</a></li>
        <li><a href="find-service.php">Find Services</a></li>

        <?php if(isset($_SESSION['user'])): ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="loginn.php">Login</a></li>
            <li><a href="signup.php" class="btn btn-primary">Sign Up</a></li>
        <?php endif; ?>
    </ul>
</nav>

<div class="container">
    <section class="hero animate">
        <div class="hero-content">
            <h2>Your Expert <span>Quick Fix</span> Just a Click Away</h2>
            <p>Connecting you with top-rated professionals for plumbing, electrical, cleaning, and more.</p>
            <div style="display: flex; gap: 15px;">
                <a href="find-service.php" class="btn btn-primary">Explore Services</a>
                <a href="signup.php" class="btn btn-outline">Become a Provider</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="logo.png">
        </div>
    </section>
</div>

</body>
</html>