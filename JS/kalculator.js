// перемножает
function calculate(val, currency){
    return (val * currency).toFixed(3);
    // toFixed(3) - Сколько знаков после запятой (3 знака)
}

function radioChange(event){
    var vastus=document.getElementById("vastus");
    var kogus=document.getElementById("kogus");
    var pilt=document.getElementById("pilt")


    const dol=1.16;
    const kr=10.65;
    const rub=84.20;
    const frank=1.077;

    if(event.target.id=="dollar") {
        vastus.innerHTML=calculate(kogus.value, dol) + " $";
        pilt.src="images/dollar.png";
    }
    else if(event.target.id=="kroon"){
        vastus.innerHTML=calculate(kogus.value, kr) + " Kr";
        pilt.src="images/kroon.png";
    }
    else if(event.target.id=="rub"){
        vastus.innerHTML=calculate(kogus.value, rub) + " ₽";
        pilt.src="images/rub.jpg";
    }
    else if(event.target.id=="frank"){
        vastus.innerHTML=calculate(kogus.value, frank) + " FBu";
        pilt.src="images/franc.jpg";
    }
}

function validateForm() {
    let x = document.forms["var1"]["kogus"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

function selectOptionChange(event){
    var vastus2=document.getElementById("vastus2");
    var kogus2=document.getElementById("kogus2");

    const dol=1.16;
    const kr=10.65;
    const rub=84.20;
    const frank=1.077;

    var inputValue = kogus2.value;

    if(inputValue > 0){
        if(event.target.value==="dollar") {
            vastus2.innerHTML=calculate(kogus2.value, dol) + " $";
        }
        else if(event.target.value==="kroon"){
            vastus2.innerHTML=calculate(kogus2.value, kr) + " Kr";
        }
        else if(event.target.value==="rub"){
            vastus2.innerHTML=calculate(kogus2.value, rub) + " ₽";
        }
        else if(event.target.value==="frank"){
            vastus2.innerHTML=calculate(kogus2.value, frank) + " FBu";
        }
    }
    else{
        vastus2.innerHTML= "There number can not be less than zero!";
    }
}

function inputValutaText(event){
    var inputValue=document.getElementById("kogus3").value;
    var inputText=document.getElementById("valuutanimi").value;
    var vastus3=document.getElementById("vastus3");

    const dol=1.16;
    const kr=10.65;
    const rub=84.20;
    const frank=1.077;

    if(inputText=="dollar"){
        vastus3.innerHTML=calculate(inputValue, dol) + " $";
    }
    else if(inputText=="kroon"){
        vastus3.innerHTML=calculate(inputValue, kr) + " Kr";
    }
    else if(inputText=="rouble"){
        vastus3.innerHTML=calculate(inputValue, rub) + " ₽";
    }
    else if(inputText=="frank"){
        vastus3.innerHTML=calculate(inputValue, frank) + " FBu";
    }
}

//-------------------------------------------------------

function calculateH(val, currency){
    return (val * currency).toFixed(1);
    // toFixed(3) - Сколько знаков после запятой (3 знака)
}

function ownCal(event){
    var vastus4=document.getElementById("vastus4");
    var kogus4=document.getElementById("kogus4");

    const dm2=1000000;
    const m2=10000;
    const km2=100;

    var inputValue = kogus4.value;

    if(event.target.value==="dm2") {
        vastus4.innerHTML=calculateH(inputValue, dm2) + " dm2";
    }
    else if(event.target.value==="m2"){
        vastus4.innerHTML=calculateH(inputValue, m2) + " m2";
    }
    else if(event.target.value==="km2"){
        vastus4.innerHTML=calculateH(inputValue, km2) + " km2";
    }
}