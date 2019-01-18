  

function validateContactData() {
    "use strict";
    var x=document.forms["myForm"]["fname"].value;
    if (x === null || x === "") {
        alert("Name must be filled out");
        return false;
    }
    if (x.length < 3) {
        alert("Name is to short, minimum 3 chars");
        return false;
    }
    
    if (x.length > 30) {
        alert("Name is to long, max 30 chars");
        return false;
    }

    var y=document.forms["myForm"]["email"].value;
    if (y === null || y == "") {
        alert("Email must be filled out");
        return false;
    }
    
    var z = document.getElementById('message').value
    if ( z === '') {      
        alert("Please provide message for me!");
        return false;
    }
    
    if ( z.length < 5) {      
        alert("Please provide longer message, minimum 5 chars!");
        return false;
    }
    
}