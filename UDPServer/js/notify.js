function cooldown(delay)
{
    var delay1 = delay * 1000;
    setInterval(function(){
        hideNotify();
    }, delay1);
}

function hideNotify()
{
    document.getElementById("notify").classList.remove("slideInUp");
    document.getElementById("notify").classList.add("fadeOutUp");
    setInterval(function () {
        document.getElementById("notify").style.display = 'none';
        console.log("Hide....");
    }, 1000);
}