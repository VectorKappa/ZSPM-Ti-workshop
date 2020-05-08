var img = document.querySelector("img");
var counter = 0;
const slide = () =>{
    (counter==3)?counter=0:counter++;
    img.src = `ph${counter}.jpg`;
}
setInterval(slide,5000);