<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPersonalStudyRoom</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Funnel+Display:wght@300..800&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<body>
    <div class="navigation">
        <ul>
            <a href="homepage.php"><li>Home</li></a>
            <li>Premium</li>
            <a href="signup.php"><li>Register</li></a>
            <a href="login.php"><li>Login</li></a>
        </ul>
    </div>
    <div class="hero">
        <h1>Your <span style="color:orange;">Personal Study Space</span>, Where <span style="color:greenyellow;">Focus</span> Meets <span style="color:yellow;">Comfort</span></h1>
    </div>
    <div class="feat">
        <div class="f1"><p><a href="studysession.php">Start Study Sessions</a></p></div>
        <div class="f2"><p><a href="signup.php">Sign Up</a></p></div>
    </div>
</body>
</html>