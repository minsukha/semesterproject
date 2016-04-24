<?php
session_start();
require_once 'header.php';
require_once 'databaseConnection.php';
pageHeader("Account Creation");

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$email=$_POST["email"];
$password=$_POST["password"];
$address=$_POST["address"];

function passwordCheck($password)
{
    $length = false;
    $numeric = false;
    $alphabetic = false;

    if(empty($password))
    {
        echo "<br> You must enter a password </br>";
    }
    if(6 > strlen($password))
    {
        $length = false;
    }
    else
    {
        $length = true;
    }
    if(strcspn($password, '0123456789') != strlen($password))
    {
        $numeric = false;
    }
    else
    {
        $numeric = true;
    }
    if(strcspn($password, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'))
    {
        $alphabetic = false;;
    }
    else
    {
        $alphabetic = true;
    }

    if($length = false)
    {
        echo "<br> Your password length must be at least six characters </br>";
    }
    else if($numeric = false)
    {
        echo "<br> Your password must contain at least one number</br>";
    }
    else if($alphabetic = false)
    {
        echo "<br> Your password must contain at leaset one letter </br>";
    }
    if($length = true && $alphabetic = true && $numeric = true)
    {
        echo "<br> This is a valid password </br>";
    }
}
passwordCheck($password);
?>
<html>
    <head>
        <title>Main Street Market Grocery</title>
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
    </head>
</html>
