<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Funnel+Display:wght@300..800&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url('main1.jpg');
        background-size: cover;
    }
    h2{
        font-family: "Funnel Display", sans-serif;
        text-align: justify;
        font-size: 60px;
        font-weight: 800;
        -webkit-text-stroke: 1.5px black;
        color: whitesmoke;
        text-align: center
    }
    .navigation{
    display: flex;
    justify-content: space-around;
}
.navigation {
    background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
    backdrop-filter: blur(10px); /* Applies the blur effect on the background */
    border-radius: 0px; /* Rounded corners */
    padding: 30px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for depth */
    color: white;
}
.navigation ul{
    display: flex;
    font-family: "Space Grotesk", serif;
    gap: 30px;
}
.navigation ul li{
    list-style-type: none;
    font-size: 25px;
    color: white;
    font-weight: bold;
    transition: 0.4s;
    cursor: pointer;
}
.navigation ul li:hover{
    background-color: blueviolet;
    padding: 3px;
    border-radius: 5px;
    padding-left: 5px;
    padding-right: 5px;
}
.navigation ul li a{
    text-decoration: none;
    color: white;
}
    .menu{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }
    .menu div{
        margin-top: 5px;
        width: 50%;
        border: 1px solid black;
        background-color: blueviolet;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0px 0px 8px black;
        transition: 0.2s;

    }
    .menu div:hover{
        background: orchid;
        font-size: 20px;
    }
    .menu div a{
        text-decoration: none;
        font-family: "Funnel Display", sans-serif;
        color: white;
    }
</style>
<body>
<div class="navigation">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li>Premium</li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
  <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

  <div class="menu">
    <div><a href="studyroomlog.php ">Start A Study Room</a></div>
    <div><a href="lofimarket.php">Lofi Music Market</a></div>
    <div><a href="studyroomlog.php ">Anime Wallpaper Market</a></div>
  </div>
</body>
</html>
