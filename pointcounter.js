let score1 = 0;
let score2 = 0;

function changeScore()
{
    if(score1 > 0)
    {
        score1++;
        document.getElementById("score1").innerHTML = score1;
    }return;

    if(score1 > 0)
    {
        score2++;
        document.getElementById("score2").innerHTML = score2;
    }return;
}