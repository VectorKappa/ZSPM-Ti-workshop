var questions = ["Z którego roku jest obowiązująca konstytucja: ","Ile rozdziałów zawiera konstytucja: ","Co gwarantuje konstytucja obywatel: ","Jakie są źródła prawa w Polsce: ","Kto jest najwyższym przedstawicielem Polski: ","Na ile jednostek dzieli się samarząd terytorialny: ","Czym kieruje rada ministrów: ","Komu bezpośrednio podlega zespolona administracja rządowa: ","Najmniejszą jednostką samorządu terytorialnego jest: ","Jaki jest minimalny wiek kandydata na Prezydenta RP: "];

// question number:[ans1,ans2,ans3,correct ans index]
var answers = [
    ["1996","1997","1998",1],
    ["13","10","15",0],
    ["Obowiązkowe wczasy","Zarobek","Wolność",2],
    ["Treści ogłaszane w teleewizji","Ustawa","Pudelek",1],
    ["Prezydent","Prezes","Król",0],
    ["5","4","3",2],
    ["Prezydentem","Administracją rządową","Sądami",1],
    ["Wojewodowi","Prezesowi","Ministrowi zdrowia",0],
    ["Województwo","Powiat","Gmina",2],
    ["45","25","35",2]
]
var correctAns = [0,0,0,0,0,0,0,0,0,0]
//Begin stackoverflow copy
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
//End stackoverflow copy
function start(){
    amWrong = 0;
    wrongs = [];
    var questionOrder = [0,1,2,3,4,5,6,7,8,9];
    var randOrder = shuffle(questionOrder);
    for(var i = 0;i<randOrder.length;i++){
        document.getElementById(`q${i+1}text`).innerText = questions[randOrder[i]];
        document.getElementById(`q${i+1}a1`).innerText = answers[randOrder[i]][0];
        document.getElementById(`q${i+1}a2`).innerText = answers[randOrder[i]][1];
        document.getElementById(`q${i+1}a3`).innerText = answers[randOrder[i]][2];
        correctAns[i] = answers[randOrder[i]][3];
    }
}
//If you like your eyes, don't read this part
function check(){
    if(document.getElementById(`q1ans${correctAns[0]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question1"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q2ans${correctAns[1]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question2"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q3ans${correctAns[2]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question3"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q4ans${correctAns[3]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question4"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q5ans${correctAns[4]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question5"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q6ans${correctAns[5]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question6"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q7ans${correctAns[6]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question7"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q8ans${correctAns[7]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question8"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q9ans${correctAns[8]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question9"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
    }
    if(document.getElementById(`q10ans${correctAns[9]+1}`).checked == false){
        amWrong++;
        wrongs.push(document.getElementById("question10"));
    }
    else{
        document.querySelectorAll("div").forEach((item)=>{item.style = "background-color:lightgreen"});
        setTimeout(()=>alert("10/10 gj"),1500);
    }
    if(amWrong>0){
        for(var i = 0;i<wrongs.length;i++){
            wrongs[i].style = "background-color:red";
        }
        setTimeout(()=>alert("Błędnie odpowiedziano na "+amWrong),1000)
    }
}