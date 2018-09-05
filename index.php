<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OneDayOnly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/index_desktop.css">
    <link type="text/css" rel="stylesheet" href="css/index_mobile.css">
    <script src="js/postToPhpScript.js"></script>
    
</head>
<body onload='document.signUp.firstname.focus()'>
    
    <!-- container - holding all 3 sections (titl,form,grey block) -->
    <div class="container">

        <!-- title section -->
        <div class="grid-title">

            <!-- title -->
            <h1>One Day Only Assessment</h1>

        </div>

        <!-- form section -->
        <div class="grid-form">

            <!-- form to retrieve data from the user -->
            <form action="insert.php" name="signUp" onsubmit="return validateForm()" method="post">

                <!-- dummy text -->
                <h2>SUBTITLE GOES HERE</h2>

                <!-- dummy text -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem ducimus architecto nulla ipsum aliquam accusantium reprehenderit, eveniet molestiae error impedit. Similique totam necessitatibus dolor ea, doloribus nihil aspernatur ducimus inventore!</p>

                <!-- first name -->
                <input type="text" name="firstname" id="first_name" placeholder="First name" required>

                <!-- last name -->
                <input type="text" name="lastname" id="last_name" placeholder="Last name" required>

                <!-- email address -->
                <input type="email" name="emailaddress" id="email_address" placeholder="Email address" required>

                <!-- onclick events (1)posting of data (2)validating of form input data -->
                <button type="submit" onclick="ajax_post();allLetter(document.signUp.firstname);allLetter(document.signUp.lasttname);">Sign up</button>

                <!-- terms and conditions link -->
                <a href="">Terms and conditions</a>

            </form>

        </div>

        <!-- blank grey block -->
        <div class="grid-img">

        </div>

    </div>

    <!-- script link to validate form input -->
    <script src="js/validate.js"></script>

</body>
</html>