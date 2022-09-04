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
    let base = {8:100,
        10:110,
        12:125,
        14:135,
        16:155,
        18:175,
        20:190,
        22:210,
        24:240,
        26:270,
        28:300,
        30:330,
        32:370,
        34:410,
        36:450,
        38:490,
        40:540,
        42:600,
        44:690,
        46:740,
        48:840,
        50:950,
        52:1020,
        54:1140,
        56:1280,
        58:1420,
        60:1540,
        65:1920,
        70:2520
    };
    let b_condition =  base[thickness];
   
    let sec_con= b_condition * ((sfd /100)**2)/ci;

    document.getElementById("condition").innerHTML = sec_con;
    let min_con = Math.round(sec_con/60*10)/10 ; 
    document.getElementById("condition2").innerHTML = min_con;
}

    const thick = document.getElementById('thickness');
    for (let i=8; i <= 70;i += 2){
        let option1 = document.createElement('option');
        option1.value = i;
        option1.innerText = i;
        thick.appendChild(option1);
    }

    