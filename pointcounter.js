let score1 = 0;
let score2 = 0;

let t1scorevalue = document.getElementById("score1")
let t2scorevalue = document.getElementById("score2")

let incrementScore = (team) => {
    if(team === "team1"){
        score1++;
        t1scorevalue.textContent = score1;
    }else if (team === "team2") {
        t2scorevalue.textContent = score2;
    }
}