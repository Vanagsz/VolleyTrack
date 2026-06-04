<?php

session_start();

require_once("gamestuff.php");

if (!isset($_POST['score1'], $_POST['score2'], $_POST['duration'])) {
    header("Location: mainpage.php");
    exit();
}

$score1        = (int) $_POST['score1'];
$score2        = (int) $_POST['score2'];
$duration      = (int) $_POST['duration'];
$winner        = isset($_POST['winner']) ? trim($_POST['winner']) : "Unknown";

$point_history = [];
if (!empty($_POST['point_history'])) {
    $point_history = json_decode($_POST['point_history'], true) ?? [];
}

$team1 = $_SESSION['team1'] ?? "Team 1";
$team2 = $_SESSION['team2'] ?? "Team 2";

saveGame($team1, $team2, $score1, $score2, $duration, $winner, $point_history);

unset($_SESSION['team1'], $_SESSION['team2']);

header("Location: mainpage.php");
exit();
