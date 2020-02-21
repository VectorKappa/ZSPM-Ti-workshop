var main = document.getElementById("main");
var fill = document.getElementById("fill")
//load
var p1 = document.createElement("p");
var p2 = document.createElement("p");
var p3 = document.createElement("p");
var img1 = document.createElement("img");
var img2 = document.createElement("img");
var img3 = document.createElement("img");
p1.innerText = "GTX 750 1GB - 200$";
p2.innerText = "GTX 1660 4GB - 600$";
p3.innerText = "RTX 2080TI 11GB - 2200$";
img1.setAttribute("src","assets/gtx750bef.jfif");
img1.setAttribute("onmouseover",'this.src="assets/gtx750aft.jfif"');
img1.setAttribute("onmouseout",'this.src = "assets/gtx750bef.jfif"');
img2.setAttribute("src","assets/gtx1660bef.jfif");
img2.setAttribute("onmouseover",'this.src="assets/gtx1660aft.jfif"');
img2.setAttribute("onmouseout",'this.src="assets/gtx1660bef.jfif"');
img3.setAttribute("src","assets/rtx2080tibef.jfif");
img3.setAttribute("onmouseover",'this.src="assets/rtx2080tiaft.jfif"');
img3.setAttribute("onmouseout",'this.src = "assets/rtx2080tibef.jfif"');
fill.innerHTML = "";
fill.appendChild(p1);
fill.appendChild(p2);
fill.appendChild(p3);
main.innerHTML = "";
main.appendChild(img1);
main.appendChild(img2);
main.appendChild(img3);
//but1
b1 = () =>{
    var p1 = document.createElement("p");
    var p2 = document.createElement("p");
    var p3 = document.createElement("p");
    var img1 = document.createElement("img");
    var img2 = document.createElement("img");
    var img3 = document.createElement("img");
    p1.innerText = "GTX 750 1GB - 200$";
    p2.innerText = "GTX 1660 4GB - 600$";
    p3.innerText = "RTX 2080TI 11GB - 2200$";
    img1.setAttribute("src","assets/gtx750bef.jfif");
    img1.setAttribute("onmouseover",'this.src="assets/gtx750aft.jfif"');
    img1.setAttribute("onmouseout",'this.src = "assets/gtx750bef.jfif"');
    img2.setAttribute("src","assets/gtx1660bef.jfif");
    img2.setAttribute("onmouseover",'this.src="assets/gtx1660aft.jfif"');
    img2.setAttribute("onmouseout",'this.src="assets/gtx1660bef.jfif"');
    img3.setAttribute("src","assets/rtx2080tibef.jfif");
    img3.setAttribute("onmouseover",'this.src="assets/rtx2080tiaft.jfif"');
    img3.setAttribute("onmouseout",'this.src = "assets/rtx2080tibef.jfif"');
    fill.innerHTML = "";
    fill.appendChild(p1);
    fill.appendChild(p2);
    fill.appendChild(p3);  
    main.innerHTML = "";
    main.appendChild(img1);
    main.appendChild(img2);
    main.appendChild(img3);
}
//but2
b2 = () =>{
    var p1 = document.createElement("p");
    var p2 = document.createElement("p");
    var p3 = document.createElement("p");
        var img1 = document.createElement("img");
    var img2 = document.createElement("img");
    var img3 = document.createElement("img");
    p1.innerText = "I3-8100 3.6GHz- 160$";
    p2.innerText = "I5-7500 3.4GHz- 250$";
    p3.innerText = "I7-9700k 4.2GHz - 900$";
    img1.setAttribute("src","assets/i3-8100bef.jfif");
    img1.setAttribute("onmouseover",'this.src="assets/i3-8100aft.jfif"');
    img1.setAttribute("onmouseout",'this.src = "assets/i3-8100bef.jfif"');
    img2.setAttribute("src","assets/i5-7500bef.jfif");
    img2.setAttribute("onmouseover",'this.src="assets/i5-7500aft.jfif"');
    img2.setAttribute("onmouseout",'this.src="assets/i5-7500bef.jfif"');
    img3.setAttribute("src","assets/i7-9700kbef.jfif");
    img3.setAttribute("onmouseover",'this.src="assets/i7-9700kaft.jfif"');
    img3.setAttribute("onmouseout",'this.src = "assets/i7-9700kbef.jfif"');
    fill.innerHTML = "";
    fill.appendChild(p1);
    fill.appendChild(p2);
    fill.appendChild(p3);
    main.innerHTML = "";
    main.appendChild(img1);
    main.appendChild(img2);
    main.appendChild(img3);
}
//but3
b3 = () =>{
    var p1 = document.createElement("p");
    var p2 = document.createElement("p");
    var p3 = document.createElement("p");
    var img1 = document.createElement("img");
    var img2 = document.createElement("img");
    var img3 = document.createElement("img");
    p1.innerText = "DDR3 8GB 1600MHz - 60$";
    p2.innerText = "DDR4 8GB 2400MHz - 110$";
    p3.innerText = "DDR4 16GB 3200MHz - 300$";
    img1.setAttribute("src","assets/ddr3-1600bef.jfif");
    img1.setAttribute("onmouseover",'this.src="assets/ddr3-1600aft.jfif"');
    img1.setAttribute("onmouseout",'this.src ="assets/ddr3-1600bef.jfif"');
    img2.setAttribute("src","assets/ddr4-2400bef.jfif");
    img2.setAttribute("onmouseover",'this.src="assets/ddr4-2400aft.jfif"');
    img2.setAttribute("onmouseout",'this.src="assets/ddr4-2400bef.jfif"');
    img3.setAttribute("src","assets/ddr4-16-3200.jfif");
    fill.innerHTML = "";
    fill.appendChild(p1);
    fill.appendChild(p2);
    fill.appendChild(p3);
    main.innerHTML = "";
    main.appendChild(img1);
    main.appendChild(img2);
    main.appendChild(img3);
}