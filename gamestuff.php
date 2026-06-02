<?php

    if (isset($_POST['team1'], $_POST['team2']))
    {
        $_SESSION['team1'] = $_POST['team1'];
        $_SESSION['team2'] = $_POST['team2'];

        header("location: gameui.php");
        exit();
    }

    header("location: mainpage.php");
    exit();

?>