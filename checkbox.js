function displayifchecked() {
       var rooms = document.getElementByClassNme("rooms");
       if(rooms.style.display == 'block')
          rooms.style.display = 'none';
       else
          rooms.style.display = 'block';
  }