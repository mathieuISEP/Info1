function display1() {
   var rooms = document.getElementById("temprooms");
       if(rooms.style.display == "block")
          rooms.style.display = "none";
       else
          rooms.style.display = "block";
       if(document.getElementById("tempcheckbox").checked)
          rooms.style.display = "block";
        else
          rooms.style.display = "none";
}
function display2() {
   var rooms = document.getElementById("alarmrooms");
       if(rooms.style.display == "block")
          rooms.style.display = "none";
       else
          rooms.style.display = "block";
        if(document.getElementById("alarmcheckbox").checked)
          rooms.style.display = "block";
        else
          rooms.style.display = "none";
}
function display3() {
   var rooms = document.getElementById("shutterrooms");
       if(rooms.style.display == "block")
          rooms.style.display = "none";
       else
          rooms.style.display = "block";
        if(document.getElementById("shuttercheckbox").checked)
          rooms.style.display = "block";
        else
          rooms.style.display = "none";
}
function display4() {
   var rooms = document.getElementById("humidityrooms");
       if(rooms.style.display == "block")
          rooms.style.display = "none";
       else
          rooms.style.display = "block";
        if(document.getElementById("humiditycheckbox").checked)
          rooms.style.display = "block";
        else
          rooms.style.display = "none";
}

