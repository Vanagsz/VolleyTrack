<?php

require_once("gamestuff.php");

saveGame(
    $_SESSION['team1'],
    $_SESSION['team2'],
    $_POST['score1'],
    $_POST['score2'],
    $_POST['duration']
);

unset($_SESSION['team1']);
unset($_SESSION['team2']);

header("Location: mainpage.php");
exit();