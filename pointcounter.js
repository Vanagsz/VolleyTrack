let points = 0;


function updateCount() {
    document.getElementById("points").innerHTML = points;
}
function addPoints(){
    points++;
    updateCount();
}

function removePoints() {
    if(points == 0){
        return;
    }else{
        points--;
        updateCount();
    }
  }