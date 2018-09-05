// validate form input


// verifies if values are present

document.addEventListener("DOMContentLoaded", function() {

var elements = document.getElementsByTagName("INPUT");

    // runs through all elements (all input values)
    for (var i in elements) {

        elements[i].oninvalid = function(e) {

        // custom validity message
        e.target.setCustomValidity("");

            // targets respective input 
            if (!e.target.validity.valid) {

                e.target.setCustomValidity(`"${this.placeholder}" cannot be left blank`);

            }
        }

        // runs through all elements (i) and sets custom validity to empty string
        elements[i].oninput = function(e) {

            e.target.setCustomValidity("");
        }
    }
});

// verifies string values in first name and last names inputs

function allLetter(inputtxt) { 

// actual pattern
  var letters = /^[A-Za-z]+$/;
  
//   if values match
  if(inputtxt.value.match(letters)) {
      
    return true;

// if values does not match
  } else if(!(inputtxt.value.match(letters))){

    // alerts a message 
    // also specifies wich input value should be changed
    alert(`Please input letter text in "${inputtxt.placeholder}"`);

    return false;

    }
} 

    

    
