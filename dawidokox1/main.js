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
var input = parseInt(prompt(`Podaj ocene`));
switch (input) {
  case 1||2:
    alert('do poprawy');
    break;
  case 3||4:
    alert(`ok`);
    break;
  case 5||6:
    alert("super");
    break;
  default:
    alert(`500 internal system error`);
}
window.location.reload();
