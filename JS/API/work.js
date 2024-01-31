function getCurrentTimeStamp(){
    postMessage(Date());
    setTimeout("getCurrentTimeStamp()", 1000);
}

getCurrentTimeStamp();