<?php

$game_data = "game_history.json";

function startGame()
{
    if(isset($_POST['team1'], $_POST['team2']))
    {
        $_SESSION['team1'] = trim($_POST['team1']);
        $_SESSION['team2'] = trim($_POST['team2']);

        header("Location: gameui.php");
        exit();
    }
}

function saveGame($team1, $team2, $score1, $score2, $seconds)
{
    global $game_data;

    $game = [
        "team 1" => $team1,
        "team 2" => $team2,
        "team 1 score" => $score1,
        "team 2 score" => $score2,
        "duration seconds" => $seconds,
        "duration display" => gmdate("i:s", $seconds),
        "date" => date("Y-m-d H:i:s")
    ];

    $games = [];

    if(file_exists($game_data))
    {
        $games = json_decode(
            file_get_contents($game_data),
            true
        ) ?? [];
    }

    $games[] = $game;

    file_put_contents(
        $game_data,
        json_encode($games, JSON_PRETTY_PRINT)
    );
}
?>