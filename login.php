<?php
    session_start();
    require_once 'header.php';
    require_once 'databaseConnection.php';

    if(isset($_POST["email"], $_POST["password"]){
        $email=$_POST["email"];
        $password=$_POST["password"];

        //SQL to log in if email and password are correct
        //alternatively, could do password checking in the form page, putting a function in header or something to use in form login and index (if they aren't logged in when they first hit the site)

        if($_SESSION['loggedin']='loggedin'){
            echo "<br>Successfully logged in.<br>";
        }else{
            echo "<br>Log in unsucessful.<br>";
        }
    }

?>
