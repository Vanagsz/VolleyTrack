let points1 = 0;
let points2 = 0;

/*Hronometrs*/
let hours = 0
let minutes = 0
let seconds = 0
let milliseconds = 0
let chronometer

const spanMinutes = document.createElement('span')
        spanMinutes.setAttribute('id', 'minutes')
        spanMinutes.innerText = '0'
    const spanHours = document.createElement('span')
        spanHours.setAttribute('id', 'hours')
        spanHours.innerText = '0'

        function start() {
            //Alternating buttons       
                const buttonStart = document.getElementById('start')
                    buttonStart.setAttribute('value' , 'Pause')
                    buttonStart.setAttribute('onclick', 'pause()')
            //Setting interval
                chronometer = setInterval(() => { timer() },10)
        }
        function pause() {
            //Alternating buttons
                const buttonStart = document.getElementById('start')
                    buttonStart.setAttribute('value', 'Start')
                    buttonStart.setAttribute('onclick', 'start()')
            //Stoping interval
                clearInterval(chronometer)
        }
        function timer() {
            
            //Milliseconds counting
                if((milliseconds += 10) === 1000){
                    milliseconds = 0
                    seconds++
                }
            //Seconds counting
                if(seconds == 60){      
                    document.getElementById('stopWatch').insertBefore(spanMinutes , document.getElementById('seconds'))           
                    seconds = 0
                    minutes++
                    //** 
                        spanMinutes.innerText = returnData(minutes,minutes)
                }
            //Minutes counting
                if(minutes == 60){
                    document.getElementById('stopWatch').insertBefore(spanHours , spanMinutes)
                    minutes = 0
                    hours++
                    //**
                        spanHours.innerText = returnData(hours,hours)
                }
            //**
                document.getElementById('seconds').innerHTML = returnData(seconds, seconds)
                document.getElementById('milliseconds').innerHTML = returnData(milliseconds, milliseconds)
        
        }
        function returnData(i, unit ) {
            //Adding a unit of measurement
                if(unit === seconds){
                    return i >= 10 ? `${i}s` : `0${i}s`
                }
                if(unit === milliseconds){
                    return i >= 10 ? `${i}` : `${i}`
                }
                if(unit === minutes){
                    return i >= 10 ? `${i}m ` : `0${i}m `
                }
                if(unit === hours){
                    return i >= 10 ? `${i}h ` : `0${i}h `
                }       
        }

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