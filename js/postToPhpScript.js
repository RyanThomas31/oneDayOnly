// php post from form data using ajax

function ajax_post(){

    // console.log("working");
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();

    // Create some variables we need to send to our PHP file
    var url = "formData.php";

    // form data to be sent to database
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var email = document.getElementById("email_address").value;

    // concatenated form data
    var vars = "firstname=" + first_name + "lastname=" + last_name + "emailaddress=" + email;

    // post method
    hr.open("POST", url, true);

    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {

    }

    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request

}


// console.log(email);