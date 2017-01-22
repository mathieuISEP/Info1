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
function checktempbox(){
  document.getElementById("tempcheckbox").checked ="checked";
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
function checkalarmbox(){
  document.getElementById("alarmcheckbox").checked ="checked";
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
function checkshutterbox(){
  document.getElementById("shuttercheckbox").checked ="checked";
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
function checkhumiditybox(){
  document.getElementById("humiditycheckbox").checked ="checked";
}
