<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pageHeader($pt)
{
    //could put the html for the heading here and use $pt in the title
    //would keep us from having to have the html on every page and from having to call more than one method and would allow us to have a personallized title for every page if we want

}

function generateTable($arr, $colName)
{
    //could have two generate table functions, one for scrolling and another for a grid
}

function loginSignup(){
    echo<<<_END
    <form class="box1" name="login">
        Email: <input type="text" name="email"/><br>
        Password: <input type="password" name="psw"/><br>
        <input type="button" onclick="parent.location='login.php" value="Login"/>
        <input type="reset" value="Cancel"/>
    </form>
    <form class="box2" name="signup">
        First Name: <input type="text" name="firstName"/><br>
        Last Name: <input type="text" name="lastName"/><br>
        Email: <input type="text" name="email"/><br>
        Address: <input type="text" name="address"/><br>
        Password: <input type="password" name="password"/><br>
        <input type="button" onclick="parent.location='signup.php" value="Login"/>
        <input type="reset" value="Cancel"/>
     </form>
_END;

}

?>
