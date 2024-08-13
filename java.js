let countJan = 0;
let countMike = 0;
let countAngelo = 0;
let countLiam = 0;
let countRyan = 0;
let countGuido = 0;
let countRaymond = 0;

document.getElementById("decreaseBtnJan").onclick = function(){
    countJan -= 1;
    document.getElementById("countLabelJan").innerHTML = countJan;
}

document.getElementById("resetBtnJan").onclick = function() 
{
    countJan = 0;
    countMike = 0;
    countAngelo = 0;
    countLiam = 0;
    countRyan = 0;
    countGuido = 0;
    countRaymond = 0;

    document.getElementById("countLabelJan").innerHTML = countJan;
    document.getElementById("countLabelMike").innerHTML = countMike;
    document.getElementById("countLabelAngelo").innerHTML = countAngelo;
    document.getElementById("countLabelLiam").innerHTML = countLiam;
    document.getElementById("countLabelRyan").innerHTML = countRyan;
    document.getElementById("countLabelGuido").innerHTML = countGuido;
    document.getElementById("countLabelRaymond").innerHTML = countRaymond;
};

document.getElementById("increaseBtnJan").onclick = function(){
    countJan += 1;
    document.getElementById("countLabelJan").innerHTML = countJan;
}

document.getElementById("decreaseBtnMike").onclick = function(){
    countMike -= 1;
    document.getElementById("countLabelMike").innerHTML = countMike;
}

document.getElementById("increaseBtnMike").onclick = function(){
    countMike += 1;
    document.getElementById("countLabelMike").innerHTML = countMike;
}

document.getElementById("decreaseBtnAngelo").onclick = function(){
    countAngelo -= 1;
    document.getElementById("countLabelAngelo").innerHTML = countAngelo;
}

document.getElementById("increaseBtnAngelo").onclick = function(){
    countAngelo += 1;
    document.getElementById("countLabelAngelo").innerHTML = countAngelo;
}

document.getElementById("decreaseBtnLiam").onclick = function(){
    countLiam -= 1;
    document.getElementById("countLabelLiam").innerHTML = countLiam;
}

document.getElementById("increaseBtnLiam").onclick = function(){
    countLiam += 1;
    document.getElementById("countLabelLiam").innerHTML = countLiam;
}

document.getElementById("decreaseBtnRyan").onclick = function(){
    countRyan -= 1;
    document.getElementById("countLabelRyan").innerHTML = countRyan;
}

document.getElementById("increaseBtnRyan").onclick = function(){
    countRyan += 1;
    document.getElementById("countLabelRyan").innerHTML = countRyan;
}

document.getElementById("dnf").onclick = function(){
    countRyan -= 3;
    document.getElementById("countLabelRyan").innerHTML = countRyan;
}

document.getElementById("decreaseBtnGuido").onclick = function(){
    countGuido -= 1;
    document.getElementById("countLabelGuido").innerHTML = countGuido;
}

document.getElementById("increaseBtnGuido").onclick = function(){
    countGuido += 1;
    document.getElementById("countLabelGuido").innerHTML = countGuido;
}

document.getElementById("decreaseBtnRaymond").onclick = function(){
    countRaymond -= 1;
    document.getElementById("countLabelRaymond").innerHTML = countRaymond;
}

document.getElementById("increaseBtnRaymond").onclick = function(){
    countRaymond += 1;
    document.getElementById("countLabelRaymond").innerHTML = countRaymond;
}

