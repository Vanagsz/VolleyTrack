let points1 = 0;
let points2 = 0;


function updateCount() {
    document.getElementById("points").innerHTML = points1;
    document.getElementById("points2").innerHTML = points2;
}
function addPoints1(){
    points1++;
    updateCount();
}

function removePoints1() {
    if(points1 == 0){
        return;
    }else{
        points1--;
        updateCount();
    }
  }
function addPoints2(){
    points2++;
    updateCount();
}

function removePoints2() {
    if(points2 == 0){
        return;
    }else{
        points2--;
        updateCount();
    }
  }