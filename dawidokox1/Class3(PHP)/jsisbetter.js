x = prompt("Enter values to square \'Divided by colons\'").split(",")
x.map((i)=>parseInt(i))
alert(x.map((i)=>i*i))
window.location.reload();