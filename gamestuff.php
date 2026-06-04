<?php

function getUserHistoryFile()
{
    $username = $_SESSION['user'] ?? 'guest';

    $safe = preg_replace('/[^a-zA-Z0-9_\-]/', '', $username);
    return "history_{$safe}.json";
}

function startGame()
{
    if (isset($_POST['team1'], $_POST['team2'])) {
        $_SESSION['team1'] = trim($_POST['team1']);
        $_SESSION['team2'] = trim($_POST['team2']);
        header("Location: gameui.php");
        exit();
    }
}

function saveGame($team1, $team2, $score1, $score2, $seconds, $winner, $point_history = [])
{
    $game_data = getUserHistoryFile();

    $game = [
        "team1"            => $team1,
        "team2"            => $team2,
        "score_team1"      => $score1,
        "score_team2"      => $score2,
        "winner"           => $winner,
        "duration_seconds" => $seconds,
        "duration_display" => gmdate("H:i:s", $seconds),
        "date"             => date("Y-m-d"),
        "time"             => date("H:i:s"),
    ];

    $games = [];
    if (file_exists($game_data)) {
        $raw   = file_get_contents($game_data);
        $games = json_decode($raw, true) ?? [];
    }

    $games[] = $game;

    file_put_contents($game_data, json_encode($games, JSON_PRETTY_PRINT));
}
?>
