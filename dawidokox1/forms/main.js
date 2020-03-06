const valForm = () =>{
    var f = document.forms["noneJS"];
    (f[fName].value.test(/[a-zA-Z]*/)==false)?errorCode("First Name is wrong"):console.log("fn:1");

}
const errorCode = e => e;