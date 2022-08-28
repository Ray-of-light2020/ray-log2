'use strict';

let ele = document.querySelectorAll(".develop-time");

ele.forEach(function(elem){
    if(elem.textContent > 9){
        elem.style.color="red";
    };
});

