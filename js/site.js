//This is a simple function that triggers alert box
function hello(){
    alert("Welcome to my website");
}

//A simple function to add 2 numbers
function add(){
    document.write(5+6);
}

//document.get.ElementById(id)
//Display or like echo
    //document.write
    //windos.alert
    //innerHTML
    //console.log


    /*
//function to change the background color of the page
function changeColor(where, newColor){
    if(where == "background"){
        document.body.style.backgroundColor = newColor;
    }
}

        */

function changeColor(){
    let color = document.getElementById("background").value;
    document.body.style.backgroundColor = color;
}

function changeFcolor(){
    let fcolor = document.getElementById("fcolor").value;
    document.body.style.color = fcolor;
}

//CRUD
function crud(){
    let fname = (document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must have atleast 5 characters");
        return false;
    }
}