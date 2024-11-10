<?php
include('database.php');    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input and sanitize it
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Hash the password (optional but recommended for security)

    // Insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header('Location: homepage.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up Form</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Funnel+Display:wght@300..800&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

<style>
    body{
        background-image: url('log1.jpg');
        background-size: cover;
    }
    h2{
        font-family: "Funnel Display", sans-serif;
        text-align: center;
        font-size: 30px;
    }
    form{
        display:flex;
        flex-wrap: wrap;
        flex-direction: column;
        width: 40%;
        gap: 5px;
        margin-left: auto;
        margin-right: auto;
      background: rgba(255, 255, 255, 0.1); /* Transparent white */
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Shadow for depth */
      backdrop-filter: blur(10px); /* Background blur effect */
      -webkit-backdrop-filter: blur(10px); /* For Safari */
      border: 1px solid rgba(255, 255, 255, 0.3); /* Light border */
      color: white;
    }
    form label{
        font-family: "Space Grotesk", serif;
    }
    form input{
        font-family: "Space Grotesk", serif;
        height: 20px;
        transition: 0.2s;

    }
    form input:hover{
        background: lightblue;
        border: transparent;
        border-radius: 5px;
    }
    #sub{
        width: 250px;
        height: 35px;
        border: transparent;
        border-radius: 5px;
        background: blue;
        color: white;
        font-weight: 500;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        cursor: pointer;
        transition: 0.2s;
    }
    #sub:hover{
        background: darkblue;
        font-size: 20px;
    }
</style>
<body>     
  <h2>Sign Up</h2>
  <form action="signup.php" method="POST">
    <label for="username">👤Username</label>
    <input type="text" id="username" name="username" required>

    <label for="email">🌐Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">🔑Password</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" id="sub" value="Sign Up">
  </form>

</body>
</html>
