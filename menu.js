function opentab(Name) {
              var i;
              var x = document.getElementsByClassName("tabcontent");
              for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                  x[i].style.background = "none";
              }
              document.getElementById(Name).style.display = "block";
          }
function opensubtab(Name){
              var i;
              var x = document.getElementsByClassName("subtab");
              for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                  x[i].style.background = "none";
              }
              document.getElementById(Name).style.display = "block";
          }

function setTemp  (current0,target){
          var current =current0;
          if (current < target )
            while (current<target){
              current =current +1;
            }
          else if (current>target){
              current = current -1;
          }
          else {}


}

function opensubsubtab(Name){
              var i;
              var x = document.getElementsByClassName("subsubtab");
              for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                  x[i].style.background = "none";
              }
              document.getElementById(Name).style.display = "block";
}