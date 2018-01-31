document.addEventListener("DOMContentLoaded",function(){
    console.info("The document is loaded and the file is linked to the index.html file.")
    document.getElementById('timer').innerHTML =
        00 + " : " + 30;
    startTimer();
});

function startTimer() {
    var presentTime = document.getElementById('timer').innerHTML;
    var timeArray = presentTime.split(/[:]+/);
    var m = timeArray[0];
    var s = checkSecond((timeArray[1] - 1));
    if(s==59){m=m-1}


    document.getElementById('timer').innerHTML =
        m + " : " + s;

    if(m <= 0 && s <= 0){
        document.getElementById('timer').innerHTML = "0 : 00";
        unhide();
    } else {
        setTimeout(startTimer, 1000);
    }
}

function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
    if (sec < 0) {sec = "59"};
    return sec;
}

function unhide()
{
    $('#winnerSpan').append('<span>WINNER</span>');
}