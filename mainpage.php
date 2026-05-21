<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: login.php"); exit();
    }
    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        header("location: login.php"); exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main-page.css">
    <title>VolleyTrack</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="" alt="Volleytrack logo">
            <div class="buttons-container-nav">
                <a href="" class="btn-design">Start game</a> 
                <a href="" class="btn-design">Game history</a> 
                <a href="?settings" class="btn-design">Settings</a>     
                <a href="?logout" class="btn-design">Logout</a>
            </div>
        </div>
        <div class="main-container">
            <h1>Welcome, <?php echo $_SESSION['user']?>.</h1>
        </div>
    </div>
</body>
</html>
