function gettheDate()
{
    Todays = new Date()
    TheDate = "" + Todays.getDate() + " / " + (Todays.getMonth()+1) + " / " + (Todays.getFullYear());
    document.getElementById("data").innerHTML = TheDate;
}

var timerID = null
var timerRunning = false

function stopclock()
{
    if(timerRunning)
        clearTimeout(timerID);
    timerRunning = false;
}

function startclock()
{
    stopclock()
    gettheDate()
    showtime()
}

function showtime()
{
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var timevalue = "" + ((hours >12) ? hours - 12 :hours)
    timevalue += ((minutes <10) ? ":0" : ":") + minutes
    timevalue += ((seconds <10) ? ":0" : ":") + seconds
    timevalue += (hours >=12) ? " p.m." : " a.m."
    document.getElementById("zegarek").innerHTML = timevalue;
    timerID = setTimeout("showtime()", 1000);
    timerRunning = true
}