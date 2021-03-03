
/* This function validates feedback form.  (used in reservation-p3.php) */
function validateFeedback() {
    let radios = document.forms["res-feedback"]["optradio"];
    validateForm = false;

    // Check if any of radios has been selected
    if (radios.value > 0) {
        validateForm = true;
    } else {
        validateForm = false;
    }
    
    // Do actions based on radios selected or not
    if (validateForm == true)
    {
        document.getElementById("error").style.color ="green";
        document.getElementById("error").innerHTML = "Thank you for your feedback!";
        // Response to succesfull feedback
        if (radios.value == 1)
        {
            document.getElementById("feedback-message").innerHTML ="We are sorry to hear that our process was difficult.";
        }
        else if (radios.value == 2)
        {
            document.getElementById("feedback-message").innerHTML ="We still have things to improve at process.";
        }
        else if (radios.value == 3)
        {
            document.getElementById("feedback-message").innerHTML ="We are glad to hear that you liked our process.";
        }
        document.getElementById("res-feedback-submit").disabled = true; //disable submit button
    } else {
        event.preventDefault();
        document.getElementById("error").style.color ="red";
        document.getElementById("error").innerHTML = "You have to select one of the radio buttons first";
    }


}

