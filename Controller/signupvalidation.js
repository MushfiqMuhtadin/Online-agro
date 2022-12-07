// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function form() {
    // Retrieving the values of form elements

    var username = document.signupform.username.value;
    var email = document.signupform.email.value;
    var phone = document.signupform.email.value;
    var dob = document.signupform.dob.value;
    var address = document.signupform.address.value;
    var usertype = document.signupform.usertype.value;
    var userpassword = document.signupform.userpassword.value;
    var confirmpassword = document.signupform.confirmpassword.value;

    // Defining error variables with a default value
    var usernameerror = emailerror = phoneerror = doberror = addresserror = usertypeerror = userpassworderror = confirmpassworderror =  true;

    // Validate username
    if (username == "") {
        printError("usernameerror", "Enter your Username");
    } else {
        printError("usernameerror", "");
        usernameerror = false;
    }

    // Validate email
    if (email == "") {
        printError("emailerror", "Enter your Email");
    } else {
        printError("emailerror", "");
        emailerror = false;
    }

    // Validate phone
    if (phone == "") {
        printError("phoneerror", "Enter your phone");
    } else {
        printError("phoneerror", "");
        phoneerror = false;
    }

    // Validate dateofbirth
    if (dob == "") {
        printError("doberror", "Enter your Dob");
    } else {
        printError("doberror", "");
            doberror = false;
    }

    // Validate address
    if (address == "") {
        printError("addresserror", "Enter your address");
    } else {
        printError("addresserror", "");
        addresserror = false;
    }
    // Validate usertype
    if (usertype == "NULL") {
        printError("usertypeerror", "Enter your usertype");
    } else {
        printError("usertypeerror", "");
        usertypeerror = false;
    }

    

    // Validate userpassword
    if (userpassword == "") {
        printError("userpassworderror", "Enter your Password");
    } else {
        printError("userpassworderror", "");
        userpassworderror = false;
    }

    // Validate confirmpassword
    if (confirmpassword == "") {
        printError("confirmpassworderror", "Confirm Your Password");
    } else {
        printError("confirmpassworderror", "");
        confirmpassworderror = false;
    }

    // Prevent the form from being submitted if there are any errors
    if (
        (usernameerror ||
            emailerror ||
            phoneerror ||
            doberror ||
            usertypeerror||
            addresserror ||
            userpassworderror ||
            confirmpassworderror) == true
    ) {
        return false;
    } else {
        return true;
    }
}
