function addFunctions(){
    var userNameID=document.getElementById("userNameID");
    userNameID.onblur=validName;
    var passwordID=document.getElementById("passwordID");
    passwordID.onblur=validPwd;
    var password2ID=document.getElementById("password2ID");
    password2ID.onblur=passwordMatch;
}

function validEmail(){
    var isValidEmail = false;
    var emailID = document.getElementById("emailID");
    var msg = document.getElementById("emailError");
    msg.style.color="red";

    if (emailID.value == "") {
        msg.innerText = "Email field is required!";
        return(false);
    } else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailID.value)){ 
         msg.innerText = "";
        return (true);
    }  
    msg.innerText = "Enter a valid email address!";
    return (false); 
    return isValidName;
}

function validName() {
    var isValidName = false;
    var userNameID = document.getElementById("userNameID");
    var msg = document.getElementById("userNameError");
    msg.style.color="red";

    if (userNameID.value == "") {
        msg.innerText = "User name field is required!";
    } else if (/[^a-zA-Z0-9._-]/.test(userNameID.value)) {
        msg.innerText = "Please enter a valid user name!";
    } else if(userNameID.length <= 5) {
        msg.innerText = "User name must be at least 5 characters";
    } else {
        msg.innerText = "";
        isValidName = true;
    }
    return isValidName;
}

function validPwd(){
    var isValidPwd = false;
    var passwordID = document.getElementById("passwordID");
    var msg = document.getElementById("passwordError");
    msg.style.color="red";

    if (passwordID.value == "") {
        msg.innerText = "Password field is required!";
    } else if (/[^a-zA-Z0-9_-]/.test(passwordID.value)) {
        msg.innerText = "Please enter a valid password!";

    } else {
        msg.innerText = "";
        isValidPwd = true;
    }
    return isValidPwd;
}

function passwordMatch()
{
    var isMatchingPassword = false;
    var passwordID = document.getElementById("passwordID");
    var password2ID = document.getElementById("password2ID");
    var msg = document.getElementById("matchError");
    msg.style.color="red";

    if(password2ID.value===""){
        msg.innerText = "Please re-enter your password!";
    }else if(passwordID.value !== password2ID.value) {
        msg.innerText = "Passwords do not match!";
    }else {
        msg.innerText ="";
        isMatchingPassword = true;
    }
    return isMatchingPassword;
}

function clearContent(node)
{
    node.value="";
}


// function passwordCheck($password)
// {
//     $length = false;
//     $numeric = false;
//     $alphabetic = false;

//     if(empty($password))
//     {
//         echo "<br> You must enter a password </br>";
//     }
//     if(6 > strlen($password))
//     {
//         $length = false;
//     }
//     else
//     {
//         $length = true;
//     }
//     if(strcspn($password, '0123456789') != strlen($password))
//     {
//         $numeric = false;
//     }
//     else
//     {
//         $numeric = true;
//     }
//     if(strcspn($password, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'))
//     {
//         $alphabetic = false;;
//     }
//     else
//     {
//         $alphabetic = true;
//     }

//     if($length = false)
//     {
//         echo "<br> Your password length must be at least six characters </br>";
//     }
//     else if($numeric = false)
//     {
//         echo "<br> Your password must contain at least one number</br>";
//     }
//     else if($alphabetic = false)
//     {
//         echo "<br> Your password must contain at leaset one letter </br>";
//     }
//     if($length = true && $alphabetic = true && $numeric = true)
//     {
//         echo "<br> This is a valid password </br>";
//     }


//     if($length==$numeric==$alphabetic==true){
//         return true;
//     }else{
//         return false;
//     }
// }