with(document){
// with(document){
//   var name =prompt("First name pls");
//   var lastName=prompt("Last name pls");
//   var age=Math.floor(Math.random()*20+15);;
//   write(`My name is ${name} ${lastName} and I'm ${age} years old`);
// }
//-----------------------------------------------------------------------------------------------------
// var num1 = parseInt(prompt("Set 1st num"));
// var num2 = parseInt(prompt("Set 2nd num"));
//
// const sum = (x,y) => {
//
//   document.write(eval(x+y));
// }
// sum(num1,num2);
//-----------------------------------------------------------------------------------------------------
// const liczba1 = () => {return 2*6+10;}
// const liczba2 = (liczba1) => {return liczba1/2}
// const liczba3 = (l1,l2) => {return (l1+l2)%l1}
// document.write(`${liczba1()} ${liczba2(liczba1())} ${liczba3(liczba1(),liczba2(liczba1()))}`);
// document.write(`<br/>Liczba Pi wynosi ${Math.PI}`);
//-----------------------------------------------------------------------------------------------------
// var input = parseInt(prompt(`Guess a number 1-10`));
// if(isNaN(input)===true){
//   throw "Not a number";
//   window.location.reload(true);
// }
// else{
//   var number = Math.floor(Math.random()*10+1);
//   if(input == number){
//     alert(`Congratulations user, you've won Iphone 2080ti`);
//     alert(`Congratulations user, you've won Iphone 2080ti`);
//     alert(`Congratulations user, you've won Iphone 2080ti`);
//     alert(`Congratulations user, you've won Iphone 2080ti`);
//     alert(`Congratulations user, you've won Iphone 2080ti`);
//     window.location.reload(true);
//   }
//   else{
//     alert(`Wrong, correct number is ${number}`);
//     window.location.reload(true);
//   }
// }
//------------------------------------------------------------------------------------------------------
// const lose=()=>{alert(`Wrong, correct number is ${number}`);window.location.reload(true);};const win=()=>{alert(`Congratulations user, you've won Iphone 2080ti`);alert(`Congratulations user, you've won Iphone 2080ti`);alert(`Congratulations user, you've won Iphone 2080ti`);alert(`Congratulations user, you've won Iphone 2080ti`);alert(`Congratulations user, you've won Iphone 2080ti`);window.location.reload(true);};var number = Math.floor(Math.random()*10+1);const error=()=>{alert("Not a number");window.location.reload(true);};var input = parseInt(prompt(`Guess a number 1-10`));(isNaN(input)==true)?error():(input==number)?win():lose();
//------------------------------------------------------------------------------------------------------
// var input = parseInt(prompt(`Podaj ocene`));
// switch (input) {
//   case 1||2:
//     alert('do poprawy');
//     break;
//   case 3||4:
//     alert(`ok`);
//     break;
//   case 5||6:
//     alert("super");
//     break;
//   default:
//     alert(`500 internal system error`);
// }
// window.location.reload();
//------------------------------------------------------------------------------------------------------
// for(var i=0;i<=10;i++){
//   document.write(`${i}<br/>`)
// }
// document.write('<br/>')
// for(var i=50;i>=0;i--){
//   document.write(`${i}<br/>`);
// }
//-------------------------------------------------------------------------------------------------------
// const hello=()=>{
//   alert("Hello there");
// }
// const multiply=(a,b)=>{
//   var guess= parseInt(prompt(`Podaj wynik ${a}*${b}`));
//   if(guess == a*b){
//     alert("git good");
//   }
//   else{alert("nope");while(true){document.write("nope<br>")}}
// }
// var a = parseInt(prompt("Podaj a"));
// var b = parseInt(prompt("Podaj b"));
// multiply(a,b);
//--------------------------------------------------------------------------------------------------------
// var a = Math.floor(Math.random()*20);
// var b = Math.floor(Math.random()*20);
// var int = setTimeout(() => {
//   while(true){document.write("You lose <br>")}
// },5000);
// var guess = parseInt(prompt(`Podaj wynik ${a} * ${b}, Masz 5 sec`));
// if(guess == a*b){
//   clearTimeout(int);
//   alert("Good");
//   setTimeout(()=>{window.location.reload()},(Math.floor(Math.random()*20+1)*1000);
// }
// else{
//   alert("rip");
// }
// const hello=()=>{
//   while(True){alert("rip")}
// }
//---------------------------------------------------------------------------------------------------------
// date = new Date();
// var patt = new RegExp("[0-9]{2}:[0-9]{2}:[0-9]{2}");
// document.write(`Dzisiaj mamy ${new Date()}<br>`);
// write(`Data GMT ${date.toGMTString()}<br>`);
// write(`Data lokalna ${date.toLocaleString()}<br>`);
// write(`Dzien miesiaca ${date.getDate()}<br>`);
// write(`Dzien tygodnia ${date.getDay()}<br>`);
// write(`Miesiac ${date.getMonth()+1}<br>`);
// write(`Rok ${date.getFullYear()}<br>`);
// write(`Godzina ${date.getHours()}<br>`);
// write(`Minuty ${date.getMinutes()}<br>`);
// write(`Sekundy ${date.getSeconds()}<br>`);
// write(`Aktualna godzina ${patt.exec(date.toLocaleString())}<br><br>`);
//
//
// write(`Adres url: ${document.location}<br>`);
// write(`title: ${document.title}<br>`);
//---------------------------------------------------------------------------------------------------------
// var sec = document.getElementById('seconds');
// var min = document.getElementById('minutes');
// var hr = document.getElementById('hours');
// var date = new Date();
// sec.innerText = date.getSeconds();
// min.innerText = date.getMinutes();
// hr.innerText = date.getHours();
// setInterval(()=>{date = new Date();
// (date.getSeconds()<10)?sec.innerText = `0${date.getSeconds()}`:sec.innerText = date.getSeconds();
// (date.getMinutes() < 10)?min.innerText = `0${date.getMinutes()}`:min.innerText = date.getMinutes();
// (date.getHours() < 10)?hr.innerText = `0${date.getHours()}`:hr.innerText = date.getHours();
// }, 1000);
//---------------------------------------------------------------------------------------------------------
// var arr = ["name1","name2","name3"];
// arr.push("name4");
// arr.push("name5");
// write(`Pierwszym elementem jest ${arr[0]}<br>`);
// var arr1 = new Array(1,3,5,7);
// write(`arr1: ${arr1}<br>`);
// write(`arr1.pop(): ${arr1.pop()}`);
//----------------------------------------------------------------------------------------------------------
var mies = ["Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień"];
var dtyg = ["Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota","Niedziela"];
let date = new Date();
var ndtyg = date.getDay()-1;
var nmies = date.getMonth();
write(`Dzisiejsza data to: ${dtyg[ndtyg]}, ${date.getDate()} ${mies[nmies]}, ${date.getFullYear()}`);
}
