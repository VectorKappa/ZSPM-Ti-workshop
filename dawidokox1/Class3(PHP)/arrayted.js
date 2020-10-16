var el = document.getElementById;
var els = [el("n1").value,el("n2").value,el("n3").value,el("n4").value,el("n5").value,el("n6").value,el("n7").value,el("n8").value,el("n9").value];
var numbers = [1,2,3,4,5,6,7,8,9];
function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
  
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
  
      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
  
    return array;
}
function shuffleEls(){
    shuffle(numbers)
    els.forEach(e => {
        e.value = numbers;
    }); 
}

function lu(){
    let val1 = els[0];
    els[0] = els[3];
    els[3] = els[6];
    els[6] = val1;
}
function mu(){
    let val1 = els[1];
    els[1] = els[4];
    els[4] = els[7];
    els[7] = val1;
}
function ru(){
    let val1 = els[2];
    els[2] = els[5];
    els[5] = els[8];
    els[8] = val1;
}
function ld(){
    let val1 = els[6];
    els[6] = els[3];
    els[3] = els[0];
    els[0] = val1;
}
function md(){
    let val1 = els[7];
    els[7] = els[4];
    els[4] = els[1];
    els[1] = val1;
}
function rd(){
    let val1 = els[8];
    els[8] = els[5];
    els[5] = els[2];
    els[2] = val1;
}
function ul(){
    let val1 = els[0];
    els[0] = els[1];
    els[1] = els[2];
    els[2] = val1;
}
function ml(){
    let val1 = els[3];
    els[3] = els[4];
    els[4] = els[5];
    els[5] = val1;
}
function ll(){
    let val1 = els[6];
    els[6] = els[7];
    els[7] = els[8];
    els[8] = val1;
}
function ur(){
    let val1 = els[2];
    els[2] = els[1];
    els[1] = els[0];
    els[0] = val1;
}
function mr(){
    let val1 = els[5];
    els[5] = els[4];
    els[4] = els[3];
    els[3] = val1;
}
function lr(){
    let val1 = els[8];
    els[8] = els[7];
    els[7] = els[6];
    els[6] = val1;
}
function checkWin(){
    if(els[0]=="1" && els[1]=="2" && els[2]=="3" && els[3]=="4" && els[4]=="5" && els[5]=="6" && els[6]=="7" && els[7]=="8" && els[8]=="9"){
        return true
    }
    else{
        return false
    }
}