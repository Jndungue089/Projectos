
let count = 1;

document.getElementById("radio1").checked = true;

setInterval(function(){

}, 2000)

function nextImage (){
    count++;
    if (cont>3) {
        count = 1
        
    }
    document.getElementById("radio").checked = true;
}