function display() {
   var rooms = document.getElementsByClassName("rooms");
   var room = rooms[0];
       if(room.style.display == "block")
          room.style.display = "none";
       else
          room.style.display = "block";
}