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
        <div class="sidebar">
            <img src="VolleyTrack.png" alt="Volleytrack logo" class="logo">
            <div class="buttons-container-nav">
                <div class=" user-profile-inner">
                    <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 495.398 495.398" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path> </g> </g> </g> </g></svg>
                    <a href="?mainpage.php" class="btn-design">Home</a> 
                </div>
                <a href="" class="btn-design">Start game</a> 
                <a href="" class="btn-design">Game history</a> 
                <a href="?settings" class="btn-design">Settings</a>     
                <a href="?logout" class="btn-design">Logout</a>
            </div>
        </div>
        <div class="container-main">
            <div class="top-bar">
                <div class="welcome-section">
                    <div class="welcome-msg">Welcome, <?php echo $_SESSION['user']; ?>.</div>
                    <div>Track every point, improve every game.</div>
                </div>
                <div class="action-section">
                    <a href="" class="btn-design">Start New Game</a>
                </div>

            </div>
            <div class="previous-games">
                <div>Previous Games</div>
                <div class="game-container">
                    <div class="game-history">TEAM 1 20 - TEAM 2 20</div>
                    <div class="game-history">TEAM 1 20 - TEAM 2 20</div>
                    <div class="game-history">TEAM 1 20 - TEAM 2 20</div>
                    <div class="game-history">TEAM 1 20 - TEAM 2 20</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
