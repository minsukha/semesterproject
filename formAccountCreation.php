<?php
require_once("header.php");
session_start();

echo <<<_END
    <form action="accountCreation.php" method='POST'>
      <fieldset>
        <legend>Create Account:</legend>
        First Name:<br>
        <input type="text" name="firstname"><br>
        Last Name:<br>
        <input type="text" name="lastname"><br>
        Email:<br>
        <input type="email" name="email" id="emailID" onfocus="clearContent(this)" onblur="validEmail(this);">
        <span id="emailError"></span>
        <br>
        User Name:<br>
        <input type="text" name="username" id="userNameID" onfocus="clearContent(this)" onblur="validName(this)">
        <span id="userNameError"></span>
        <br>
        Password:<br>
        <input type="password" name="password" id="passwordID" onfocus="clearContent(this)" onblur="validPwd(this)">
        <span id="passwordError"></span>
        <br>
        Re-enter Password:<br>
        <input type="password" name="password2" id="password2ID" onblur="passwordMatch(this)" onfocus="clearContent(this)">
        <span id="matchError"></span>
        <br>
        <input type="submit" value="Submit">
      </fieldset>
    </form>
    <script type ="text/javascript" src="checkPassword.js"></script>
_END
?>
