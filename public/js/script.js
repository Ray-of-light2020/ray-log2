'use strict';

let ele = document.querySelectorAll(".develop-time");

ele.forEach(function(elem){
    if(elem.textContent > 9){
        elem.style.color="red";
    };
});


const showMessage = () => {
    let thickness = document.getElementById("thickness").value;
   
    let ci = document.getElementById("ci").value;
    
    let sfd = document.getElementById("sfd").value;


     document.getElementById("condition").innerHTML = thickness;
     document.getElementById("condition2").innerHTML = ci;
     document.getElementById("condition3").innerHTML = sfd;
 }

