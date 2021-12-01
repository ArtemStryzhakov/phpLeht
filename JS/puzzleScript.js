var lopp=false;

function klik(pilt){
    pilt.src=kellekord;


    /* if(kellekord=="pildid/x.png"){
        kellekord="pildid/o.jpg";
    }
    else{
        kellekord="pildid/x.png";
    }*/
}

function klikValik(pilt){
    kellekord=pilt.src;
    document.getElementById("pilt19").src=kellekord;
}

//проверяет все картинки и возвращает false если найдёт пустую картинку.


// определяем имя файла
function sisu(nr){
    var fnimi=document.getElementById("pilt" + nr).src;
    fnimi=fnimi.split("/").pop();
    return fnimi;
}