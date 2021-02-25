
/* This function will give notifications to user when filling subscribe-newsletter form. (used in home.php) */

function validateSubscribeForm() {
    let email = document.forms["subscribe-newsletter"]["email"];
    let checkBox = document.getElementById('checkbox');

    // check if email field is not empty.
    if (email.value == "") {
        event.preventDefault();
        document.getElementById("error").style.color = "red";
        document.getElementById("error").innerHTML = "Email field is empty";
        document.getElementById("email").style.borderType = "5px double";
        document.getElementById("email").style.borderColor = "red";
        return false;
    // check if checkbox is checked
    } else if (!checkBox.checked) {
        // if email is not empty change border to green
        if (email.value != "") {
        document.getElementById("email").style.borderColor = "green";
        }
        event.preventDefault();
        document.getElementById("error").style.color ="red";
        document.getElementById("error").innerHTML = "You have not agreed to subscribe newsletter";
        document.getElementById("lblCheckbox").style.color = "red";
        document.getElementById("lblCheckbox").style.borderType ="5px double";
        return false;
    } else {
        document.getElementById("error").style.color = "red";
        document.getElementById("email").style.borderColor = "white";
        alert("You have succesfully subscribed our newsletter!");
        return true;
    }
}
