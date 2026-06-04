let score1 = 0;
let score2 = 0;

let pointHistory = [];

function changeScore(team, action) {

    if (team === 1) {

        if (action === "add") {
            score1++;
            pointHistory.push({ team: 1 }); // record this point
        }

        if (action === "remove" && score1 > 0) {
            score1--;
        }

        document.getElementById("score1").innerHTML = score1;

    } else if (team === 2) {

        if (action === "add") {
            score2++;
            pointHistory.push({ team: 2 }); // record this point
        }

        if (action === "remove" && score2 > 0) {
            score2--;
        }

        document.getElementById("score2").innerHTML = score2;
    }
}

function endGame() {

    let confirmed = confirm("Are you sure you want to end the game?");
    if (!confirmed) return;

    pause();

    let totalSeconds = 0;

    let hoursEl = document.getElementById("hours");
    let minutesEl = document.getElementById("minutes");
    let secondsEl = document.getElementById("seconds");

    if (hoursEl) {
        totalSeconds += parseInt(hoursEl.innerText) * 3600;
    }
    if (minutesEl) {
        totalSeconds += parseInt(minutesEl.innerText) * 60;
    }
    if (secondsEl) {
        let rawSeconds = secondsEl.innerHTML.replace("s", "");
        totalSeconds += parseInt(rawSeconds) || 0;
    }

    let team1Name = document.querySelector(".team1 h3").innerText;
    let team2Name = document.querySelector(".team2 h3").innerText;

    let winner = "";
    if (score1 > score2) {
        winner = team1Name;
    } else if (score2 > score1) {
        winner = team2Name;
    } else {
        winner = "tie";
    }

    // Build the form and submit it to savegame.php
    // This is the cleanest way to POST data from JS to PHP
    let form = document.createElement("form");
    form.method = "POST";
    form.action = "savegame.php";

    // Helper function to add a hidden input to the form
    function addField(name, value) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = name;
        input.value = value;
        form.appendChild(input);
    }

    addField("score1", score1);
    addField("score2", score2);
    addField("duration", totalSeconds);
    addField("winner", winner);

    // Send the point history as a JSON string
    addField("point_history", JSON.stringify(pointHistory));

    // Add the form to the page and submit it
    document.body.appendChild(form);
    form.submit();
}

// Hook up the End Game button when the page loads
document.addEventListener("DOMContentLoaded", function () {
    let endBtn = document.querySelector(".end-game-btn");
    if (endBtn) {
        endBtn.addEventListener("click", endGame);
    }
});
