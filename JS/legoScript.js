function kustuta(){
    var t=document.getElementById("field").getContext("2d");
    t.clearRect(0, 0, 400, 500); //x, y, kõrgus
}

function legs2(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="#202020";
    ender.fillRect(120, 110, 5, 30);
    ender.fillRect(165, 100, 5, 20);
}

function bodi2(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="#202020";
    ender.fillRect(140, 60, 5, 15);
    ender.fillRect(180, 60, 6, 20);
    ender.fillRect(120, 70, 15, 2);
    ender.fillRect(107, 75, 5, 10);
}

function arms2(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="#202020";
    ender.fillRect(77, 90, 5, 15);
    ender.fillRect(74, 60, 4, 20);
    ender.fillRect(210, 75, 5, 10);
    ender.fillRect(180, 60, 6, 20);
}

function headu2(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="#202020";
    ender.fillRect(140, 35, 24, 2);
    ender.fillRect(180, 60, 6, 20);
}

function legs(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="black";
    ender.fillRect(110, 85, 20, 100);
    ender.fillRect(160, 85, 20, 100);
    legs2();
}

function bodi(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="black";
    ender.fillRect(85, 50, 120, 40);
    bodi2();
}

function arms(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="black";
    ender.fillRect(70, 50, 20, 75);
    ender.fillRect(200, 50, 20, 75);
    arms2();
}

function headu(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="black";
    ender.fillRect(98, 30, 90, 22);
    headu2();
}

function eyes2(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="#FF00FF";
    ender.fillRect(109, 42, 13, 4);
    ender.fillRect(164, 42, 13, 4);
}

function eyes(){
    var ender=document.getElementById("field").getContext("2d");
    ender.fillStyle="#FF99FF";
    ender.fillRect(98, 42, 35, 4);
    ender.fillRect(153, 42, 35, 4);
    eyes2();
}

function enderman(){
    legs();
    bodi();
    arms();
    headu();
    eyes();
}
